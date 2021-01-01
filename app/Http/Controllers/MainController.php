<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\lang;
use App\Models\project;
use App\Models\project_lang;
use App\Models\project_types;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function main(){
        $projects = DB::table('projects')
                    ->where('ispublic',1)
                    ->where('status',1)
                    ->get();
        $lang = lang::all();
        return view('welcome', ['projects'=>$projects, 'langs'=>$lang]);
    }
    public function contact(Request $request){
        $contact = new contact();
        $contact->content = $request->input('message');
        $contact->name = $request->input('nom');
        $contact->email = $request->input('email');
        $contact->save();
        return redirect('/')->with('success', 'Votre cours à bien été créé.');
    }
}
