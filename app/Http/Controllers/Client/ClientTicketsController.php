<?php
/*
 * Copyright (c) 2021. Simon Lou - Web developer, designer &  integrator
 * https://www.simon-lou.com
 */

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\echange_tickets;
use App\Models\project_echange;
use App\Models\tickets_category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientTicketsController extends Controller
{
    public function __construct()
    {
        $this->middleware('client');
    }

    public function index(){
        $tickets = project_echange::all()->where('user_id',Auth::user()->id)->sortByDesc('id');

        return view('client.tickets.index',[
            'tickets'=>$tickets,
        ]);
    }

    public function show($id){
        $ticket = project_echange::where('id', $id)->first();
        $echange = echange_tickets::all()->where('echange_id', $ticket->id)->sortByDesc('id');

        return view('client.tickets.chat',[
            'ticket' => $ticket,
            'echanges' => $echange
        ]);
    }

    public function create($project_id){
        $ticket_cat = tickets_category::all();
        return view('client.tickets.create', [
            'cats' => $ticket_cat,
            'projectid' => $project_id,
        ]);
    }
    public function store($project_id, request $request): \Illuminate\Http\RedirectResponse
    {
        $echange = new project_echange();
        $echange->project_id = $project_id;
        $echange->object = $request->input('object');
        $echange->description = $request->input('desc');
        $echange->category_id = $request->input('cat');
        $echange->user_id = Auth::id();
        $echange->save();

        return redirect()->route('client.ticket.chat',$echange->id);
    }
    public function add_message($id, request $request): \Illuminate\Http\RedirectResponse
    {
        $message = new echange_tickets();
        $message->echange_id = $id;
        $message->sender_id = Auth::id();
        $message->content = $request->input('content');
        $message->save();

        return redirect()->route('client.ticket.chat',$id);
    }
}
