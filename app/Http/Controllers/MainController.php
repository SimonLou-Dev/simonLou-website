<?php

namespace App\Http\Controllers;

use App\Models\lang;
use App\Models\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function main(){
        $projects = DB::table('projects')
                    ->where('ispublic',1)
                    ->where('status',2)
                    ->get();
        $lang = lang::all();
        return view('welcome', ['projects'=>$projects, 'lang'=>$lang]);
    }
}
