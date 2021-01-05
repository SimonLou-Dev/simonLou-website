<?php
/*
 * Copyright (c) 2021. Simon Lou - Web developer, designer &  integrator
 * https://www.simon-lou.com
 */

namespace App\Http\Controllers\Admin;

use App\Mail\CreatedProject;
use App\Mail\UpdateMail;
use App\Models\lang;
use App\Models\project;
use App\Models\project_board_items;
use App\Models\project_images;
use App\Models\project_lang;
use App\Models\project_types;
use App\Models\project_updates;
use App\Models\status;
use App\Models\User;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }
    // Main view & View of one project
    public function index()
    {
        $projects = project::all()->sortByDesc('id');
        return view('admin.project.index', ['projects'=>$projects]);
    }
    public function show($id)
    {
        $project = project::where('id',$id)->first();
        $maj = project_updates::all()->where('project_id', $id)->sortBy('created_at')->first();
        $statuses = status::all();
        return view('admin.project.view', [
            'project'=>$project,
            'majs'=>$maj,
            'statuses' => $statuses
        ]);
    }

    // Create project
    public function create()
    {
        $status = status::all();
        $lang = lang::all();
        $type = project_types::all();
        return view('admin.project.create',['statuses'=>$status, 'langs'=>$lang, 'types'=>$type]);
    }
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'projectname' => 'required',
            'projectdesc' => 'required',
            'clientmail' => 'required',
            'domain' => 'required',
            'hoster' => 'required',
            'img' => 'required',
            'projecttype' => 'required',
            'startstatus' => 'required',
            'languages' => 'required',
            'hostedinfos' => 'required',
        ]);

        $project = new project();
        $uploadedfile = $request->file('img');
        $uploadedfilefullname = $uploadedfile->getClientOriginalName();
        $uploadedfileext = $uploadedfile->getClientOriginalExtension();
        $uploadedfilename = pathinfo($uploadedfilefullname, PATHINFO_FILENAME);
        $file = time() . '_' . $uploadedfilename . '.'.$uploadedfileext;
        $project->main_img = $file;
        $project->title = $request->input('projectname');
        $user = User::where('email', $request->input('clientmail'))->first();
        $createdaccount =false;
        $password = Str::random(10);


        if($user === null){
            $user = new User();
            $user->name = $request->input('clientname');
            $user->email = $request->input('clientmail');
            $user->password = Hash::make($password);
            $user->grade = 2;
            $user->save();
            $user->markEmailAsVerified();
            $project->client_id = User::where('email', $user->email)->first()->id;
            $createdaccount = true;

        }else{
            $project->client_id = $user->id;
            $user->grade = 2;
            $user->update();
        }

        $project->description = $request->input('projectdesc');
        $project->type = $request->input('projecttype');
        $project->user_rate = 0;
        $project->client_rate = 0;
        $project->ispublic = $request->exists('ispublic');
        $project->status = $request->input('startstatus');
        if($request->exists('create_gitrepo')){

        }
        $project->link = $request->input('domain');
        $project->hostedby = $request->input('hoster');
        $project->hosted_infos = $request->input('hostedinfos');
        $project->in_wait = $request->exists('in_wait');
        $project->save();
        if($request->exists('advert_client')){
            Mail::to($user)->send(new CreatedProject($createdaccount, $user, $project, $password));
        }
        $id = project::all()->last()->id;
        $langs = $request->input('languages');
        $sql = "insert into project_langs (project_id";
        foreach ($langs as $lang){
            $prog = lang::where('id', $lang)->first();
            $sql = $sql . ', '. $prog->name;
        }
        $sql = $sql . ') VALUES ('. $id;
        foreach ($langs as $lang){
            $sql = $sql . ', true';
        }
        $sql = $sql . ')';
        DB::insert($sql);
        $uploadedfile->storeAs('public/project/'.$id, $file);

        return redirect()->route('admin.project', $id);
    }
    //edit project
    public function edit($id)
    {
        $project = project::all()->where('id', $id)->first();
        $status = status::all();
        $lang = lang::all();
        $type = project_types::all();
        $imgs = project_images::all()->where('project_id', $id);
        return view('admin.project.modify', [
            'project'=>$project,
            'statuses'=>$status,
            'langs'=>$lang,
            'types'=>$type,
            'imgs'=>$imgs,
        ]);
    }
    public function update($id, Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'projectname' => 'required',
            'projectdesc' => 'required',
            'clientmail' => 'required',
            'domain' => 'required',
            'hoster' => 'required',
            'projecttype' => 'required',
            'startstatus' => 'required',
            'languages' => 'required',
            'hostedinfos' => 'required',
        ]);

        $project = project::where('id', $id)->first();
        if($request->file('img')){
            $uploadedfile = $request->file('img');
            $uploadedfilefullname = $uploadedfile->getClientOriginalName();
            $uploadedfileext = $uploadedfile->getClientOriginalExtension();
            $uploadedfilename = pathinfo($uploadedfilefullname, PATHINFO_FILENAME);
            $file = time() . '_' . $uploadedfilename . '.'.$uploadedfileext;
            $project->main_img = $file;
        }

        $project->title = $request->input('projectname');
        $project->description = $request->input('projectdesc');
        $project->type = $request->input('projecttype');
        if($project->ispublic != $request->exists('ispublic')){
            $project->ispublic = $request->exists('ispublic');
        }
        $project->status = $request->input('startstatus');
        $project->link = $request->input('domain');
        $project->hostedby = $request->input('hoster');
        $project->hosted_infos = $request->input('hostedinfos');
        $project->client_rate = $request->input('client_rate');
        $project->user_rate = $request->input('user_rate');
        $project->in_wait = $request->exists('in_wait');
        $project->save();
        $langs = $request->input('languages');
        $sql = "UPDATE project_langs SET projeCt_id =".$id;
        foreach ($langs as $lang){
            $prog = lang::where('id', $lang)->first();
            $sql = $sql . ', '. $prog->name . ' = true';
        }
        $sql = $sql . ' WHERE project_id ='.$id;

        DB::update($sql);
        if($request->file('img')){$uploadedfile->storeAs('public/project/'.$id, $file);}
        return redirect()->route('admin.project',$id);
    }

    //update add, publie
    public function add_update($id){
        $project = project::where('id', $id)->first();
        return view('admin.project.update.create', ['project'=>$project]);
    }
    public function post_update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required',
        ]);

        $add_update = new project_updates();

        if($request->exists('publi')){
            $add_update->publisched = true;
        }
        $add_update->version = 'V'.$request->input('name');
        $add_update->content = $request->input('desc');
        $add_update->project_id = $id;
        $add_update->save();
        $update = project_updates::all()->last();
        if($request->exists('advertclient')){
            $project = project::where('id', $id)->first();
            $user = $project->user;
            Mail::to($user)->send(new UpdateMail($user, $project, $update));
        }
        return redirect()->route('admin.project', $id);
    }
    public function publish_update($id): \Illuminate\Http\RedirectResponse
    {
        $update = project_updates::where('id', $id)->first();
        $update->publisched = true;
        $update->save();
        return redirect()->back();
    }
    public function set_status($id, request $request): \Illuminate\Http\RedirectResponse
    {
        $project = project::where('id', $id)->first();
        $project->status = $request->input('status');
        $project->save();
        return redirect()->back();
    }

    //board show, edit card & add card
    public function show_board($id){
        $project = project::find($id);
        $ended = project_board_items::where('category', 4)->get();
        $inwork = project_board_items::where('category', 3)->get();
        $forlater = project_board_items::where('category', 2)->get();
        $bug= project_board_items::where('category', 1)->get();
        return view('admin.project.board', ['project'=>$project, 'endeds' =>$ended, "inworks" =>$inwork, "forlaters"=>$forlater,'bugs'=>$bug]);
    }
    public function edit_board($id): \Illuminate\Http\RedirectResponse
    {
        $project = project::where('id', $id);
        return redirect()->route('admin.project.board',$id);
    }
    public function add_cardboard($id, Request $request): \Illuminate\Http\RedirectResponse
    {
        $item_bord = new project_board_items();
        $item_bord->project_id = $id;
        $item_bord->name =$request->input('name');
        $item_bord->category = $request->input('category');
        $spaces = $request->input('space');
        foreach ($spaces as $space){
            if ($space == 'back'){
                $item_bord->back = true;
            }
            if($space == 'front'){
                $item_bord->front = true;
            }
        }
        $item_bord->save();
        return redirect()->route('admin.project.board', $id);
    }
    public function card_setpriority($id, $priotiry): \Illuminate\Http\RedirectResponse
    {
        $card = project_board_items::where('id', $id);
        $card->priority = $priotiry;
        $card->save();
        return redirect()->route('admin.project.board', $id);
    }
    public function card_setspace($id, $space): \Illuminate\Http\RedirectResponse
    {
        $card = project_board_items::where('id', $id);
        if($space == "front"){
            if($card->front){
                $card->front = false;
            }else{
                $card->front = true;
            }
        }
        if($space == "back"){
            if($card->back){
                $card->back = false;
            }else{
                $card->back = true;
            }
        }
        $card->save();
        return redirect()->route('admin.project.board', $id);
    }
    public function card_setcategory($id, $category): \Illuminate\Http\RedirectResponse
    {
        $card = project_board_items::find($id);
        $card->category = $category;
        $card->save();
        return redirect()->route('admin.project.board', $id);
    }

    public function add_picture($id, request $request): \Illuminate\Http\RedirectResponse
    {
        $img = new project_images();
        $uploadedfile = $request->file('img');
        $uploadedfilefullname = $uploadedfile->getClientOriginalName();
        $uploadedfileext = $uploadedfile->getClientOriginalExtension();
        $uploadedfilename = pathinfo($uploadedfilefullname, PATHINFO_FILENAME);
        $file = time() . '_' . $uploadedfilename . '.'.$uploadedfileext;
        $uploadedfile->storeAs('public/project/'.$id, $file);
        $img->project_id = $id;
        $img->description = $request->input('text');
        $img->title = $request->input('title');
        $img->path = $file;
        $img->save();
        return redirect()->route('admin.project.modify', $id);
    }
    public function remove_picture($id): \Illuminate\Http\RedirectResponse
    {
        $img = project_images::where('id', $id);
        $img->delete();
        return redirect()->route('admin.project.modify', $id);
    }




}
