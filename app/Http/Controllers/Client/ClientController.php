<?php
/*
 * Copyright (c) 2021. Simon Lou - Web developer, designer &  integrator
 * https://www.simon-lou.com
 */

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\lang;
use App\Models\project;
use App\Models\project_updates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('client');
    }

    public function index(){
        $projects = project::where('client_id', Auth::user()->id)->get();

        return view('client.index', [
            'projects' => $projects,
        ]);
    }
    public function show($id){
        $procjet = project::find($id);
        $maj = project_updates::all()->where('project_id', $procjet->id)->where('publisched', true)->sortByDesc('id');
        $lang = lang::all();

        return view('client.project', [
           'majs' => $maj,
           'project' => $procjet,
           'langs'=>$lang
        ]);
    }



}
