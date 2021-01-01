@extends('layout.app')

@section('content')
    <div id="ticket-chat">
        <div id="chat-content">
            <section class="informations">
                <div class="item-header">
                    @if(!$ticket->closed)
                        <h5 class="processing"><span class="icon"><i class="fas fa-spinner"></i></span>En cours</h5>
                    @else
                        <h5 class="processed"><span class="icon"><i class="far fa-check-circle"></i></span>Résolu</h5>
                    @endif
                    <div class="divider"></div>
                    <h2>Objet : {{$ticket->object}}</h2>
                    <h4>Categorie: {{$ticket->tickets_categorie->name}}</h4>
                    <h6>Projet : {{$ticket->project->title}}</h6>
                </div>
                <div class="item-content">
                    <p>{{$ticket->description}}</p>
                </div>
                <div class="divider"></div>
                <div class="item-footer">
                    <h4>{{date('d/m/Y', strtotime($ticket->created_at))}}</h4>
                </div>
            </section>
            <section class="dialogue">
                <div class="chat-container">
                    <div class="chat-msg">
                        @foreach($echanges as $echange)
                            <div class="msg-content" id="tickets_chat">
                                @if($echange->sender_id == \Illuminate\Support\Facades\Auth::id())
                                    <div class="me msg">
                                @else
                                    <div class="other msg">
                                @endif
                                    <h4>{{$echange->user->name}}</h4>
                                    <div class="divider-container"><div class="divider"></div></div>
                                    <p>{{$echange->content}}</p>
                                    <div class="divider-container"><div class="divider"></div></div>
                                    <h5>{{date('d/m/Y à H:i:s', strtotime($echange->created_at))}}</h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <form method="post" action="{{route('client.ticket.post', $ticket->id)}}">
                        @csrf
                        @if($ticket->closed)
                            <div class="form-left">
                                <label>Ecrire un message</label>
                                <button type="submit">Envoyer</button>
                            </div>
                            <textarea name="content" type="text" disabled required></textarea>
                        @else
                            <div class="form-left">
                                <label>Ecrire un message</label>
                                <button type="submit">Envoyer</button>
                            </div>
                            <textarea name="content" type="text"  required></textarea>
                        @endif
                    </form>
                </div>
                    </div>
            </section>
        </div>
    </div>
@endsection
