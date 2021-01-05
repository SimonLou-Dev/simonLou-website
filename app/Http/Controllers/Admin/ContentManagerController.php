<?php
/*
 * Copyright (c) 2021. Simon Lou - Web developer, designer &  integrator
 * https://www.simon-lou.com
 */

namespace App\Http\Controllers\Admin;

use App\Models\lang;
use App\Models\project_types;
use App\Models\status;
use App\Models\tickets_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;


class ContentManagerController extends Controller
{
    private $columnname;

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
        $cattickets = tickets_category::all();
        $projectstatus = status::all();
        $languages = lang::all();
        $types = project_types::all();
        return view('admin.management.index', [
            'cattickets'=>$cattickets,
            'projectstatus'=>$projectstatus,
            'languages'=>$languages,
            'projecttypes'=>$types,
        ]);
    }
    public function delet_ticketcat(Request $request): \Illuminate\Http\RedirectResponse
    {
        $tickets = tickets_category::where('id', $request->input('delet_tickets_categorie'))->first();
        $tickets->delete();
        return redirect()->route('admin.management.content');
    }
    public function delet_projectstatus(Request $request): \Illuminate\Http\RedirectResponse
    {
        $status = status::where('id',$request->input('delet_project_status'))->first();
        $status->delete();
        return redirect()->route('admin.management.content');
    }
    public function add_ticketcat(Request $request): \Illuminate\Http\RedirectResponse
    {
        $tickets = new tickets_category();
        $tickets->name = $request->input('new_tickets_categorie');
        $tickets->save();
        return redirect()->route('admin.management.content');
    }
    public function add_projectstatus(Request $request): \Illuminate\Http\RedirectResponse
    {
        $status = new status();
        $status->name = $request->input('new_project_status');
        $status->save();
        return redirect()->route('admin.management.content');
    }
    public function add_language(Request $request): \Illuminate\Http\RedirectResponse
    {
        $lang = new lang();
        $lang->name = $request->input('new_lang');
        $lang->category = $request->input('lang_categorie');
        $lang->save();
        $this->columnname = $request->input('new_lang');
        Schema::table('project_langs', function ($table){
            $table->boolean($this->columnname)->default(false);
        });
        return redirect()->route('admin.management.content');
    }
    public function add_projecttype(Request $request): \Illuminate\Http\RedirectResponse
    {
        $type = new project_types();
        $type->name = $request->input('new_project_type');
        $type->save();
        return redirect()->route('admin.management.content');
    }
    public function remove_projecttype(Request $request): \Illuminate\Http\RedirectResponse
    {
        $type = project_types::where('id',$request->input('delet_project_type'))->first;
        $type->delet();
        return redirect()->route('admin.management.content');
    }


}
