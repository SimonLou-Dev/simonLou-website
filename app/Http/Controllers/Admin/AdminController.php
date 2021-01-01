<?php
/*
 * Copyright (c) 2021. Simon Lou - Web developer, designer &  integrator
 * https://www.simon-lou.com
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\contact;
use App\Models\project;
use App\Models\project_echange;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function view(){
        $projects = project::all()->sortByDesc('id')->take(10);
        $infos['contact'] = contact::where('read', false)->count();
        $infos['tickets'] = project_echange::where('closed', false)->count();
        $infos['ended']= project::where('status', 1)->count();
        $infos['in_wait']= project::where('in_wait', true)->count();
        return view('admin.index', ['projects'=>$projects, 'infos'=>$infos]);
    }

    public function contact(){
        $contacts = contact::all()->sortByDesc('id');
        return view('admin.contact.index', [
            'contacts' => $contacts,
        ]);
    }
    public function markasread($id): \Illuminate\Http\RedirectResponse
    {
        $contact = contact::find($id);
        $contact->read = true;
        $contact->save();
        return redirect()->route('admin.contact');
    }
    public function delete($id): \Illuminate\Http\RedirectResponse
    {
        $contact = contact::find($id);
        $contact->delete();
        return redirect()->route('admin.contact');
    }
}
