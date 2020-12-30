<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\project_updates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $projects = project::all()->sortBy('id');
        return view('admin.project.index', ['projects'=>$projects]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = project::find($id);
        $lastmaj = DB::table('project_updates')
                        ->where('id', $id)
                        ->orderBy('created_at')
                        ->first();
        return view('admin.project.view', ['project'=>$project, 'lastmaj'=>$lastmaj]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = project::find($id);
        return view('admin.project.modify', ['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add_update($id){
        $project = project::find($id);
        return view('admin.project.update.create', ['project'=>$project]);
    }

    public function board($id){
        $project = project::find($id);
        return view('admin.project.board', ['project'=>$project]);
    }
}
