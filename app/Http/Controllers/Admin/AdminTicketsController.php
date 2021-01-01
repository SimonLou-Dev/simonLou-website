<?php
/*
 * Copyright (c) 2021. Simon Lou - Web developer, designer &  integrator
 * https://www.simon-lou.com
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\echange_tickets;
use App\Models\project_echange;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminTicketsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
        $tickets = project_echange::all()->where('closed', false)->sortByDesc('id');

        return view('admin.tickets.index',[
            'tickets'=>$tickets,
        ]);
    }

    public function show($id){
        $ticket = project_echange::where('id', $id)->first;
        $echange = echange_tickets::all()->where('echange_id', $ticket->id)->sortByDesc('id');

        return view('admin.tickets.reply',[
            'ticket' => $ticket,
            'echanges' => $echange
        ]);
    }
    public function add_message($id, request $request): \Illuminate\Http\RedirectResponse
    {
        $message = new echange_tickets();
        $message->echange_id = $id;
        $message->sender_id = Auth::id();
        $message->content = $request->input('content');
        $message->save();

        return redirect()->route('admin.tickets.reply',$id);
    }
    public function close($id){
        $echange = project_echange::where('id', $id)->first();
        $echange->closed = true;
        $echange->save();

        return redirect()->route('admin.tickets');
    }
}
