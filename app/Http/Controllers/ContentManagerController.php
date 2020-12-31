<?php

namespace App\Http\Controllers;

use App\Models\lang;
use App\Models\status;
use App\Models\tickets_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

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
        return view('admin.management.index', ['cattickets'=>$cattickets, 'projectstatus'=>$projectstatus, 'languages'=>$languages]);
    }
    public function delet_ticketcat(Request $request){
        $tickets = tickets_category::find($request->input('delet_tickets_categorie'));
        $tickets->delete();
        return $this->index();
    }
    public function delet_projectstatus(Request $request){
        $status = status::find($request->input('delet_project_status'));
        $status->delete();
        return $this->index();
    }
    public function add_ticketcat(Request $request){
        $tickets = new tickets_category();
        $tickets->name = $request->input('new_tickets_categorie');
        $tickets->save();
        return $this->index();
    }
    public function add_projectstatus(Request $request){
        $status = new status();
        $status->name = $request->input('new_project_status');
        $status->save();
        return $this->index();
    }
    public function add_language(Request $request){
        $lang = new lang();
        $lang->name = $request->input('new_lang');
        $lang->category = $request->input('lang_categorie');
        $lang->save();
        $this->columnname = $request->input('new_lang');
        Schema::table('project_langs', function ($table){
            $table->boolean($this->columnname);
        });
       return $this->index();
    }

}
