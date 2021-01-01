@extends('layout.app')

@section('content')
    <div id="list-of-tickets">
        <div class="tickets-content">
            @foreach($tickets as $ticket)
                <div class="items">
                    <a href="{{route('client.ticket.chat', $ticket->id)}}">
                        @if(!$ticket->closed)
                            <h5 class="processing"><span class="icon"><i class="fas fa-spinner"></i></span>En cours</h5>
                        @else
                            <h5 class="processed"><span class="icon"><i class="far fa-check-circle"></i></span>Résolu</h5>
                        @endif
                        <div class="item-header">
                            <h2>{{$ticket->object}}</h2>
                            <h4>{{$ticket->tickets_categorie->name}}</h4>
                            <h6>{{$ticket->project->title}}</h6>
                        </div>
                        <div class="item-content">
                            <p>{{$ticket->description}}</p>
                        </div>
                        <div class="item-footer">
                            <h4>Créé le : {{date('d/m/Y', strtotime($ticket->created_at))}}</h4>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


@endsection
