@extends('layout.admin')

@section('content')
    <div id="user-contact">
        <div class="user-contact">
            @foreach($contacts as $contact)
                <div class="contact-card">
                    <div class="contact-card_header">
                        <h2 class="name">{{$contact->name}}</h2>
                        <h2 class="mail">{{$contact->email}}</h2>
                    </div>
                    <div class="separator"></div>
                    <div class="contact-card_content">
                        <p>{{$contact->content}}</p>
                    </div>
                    <div class="separator"></div>
                    <div class="contact-card_footer">
                        @if(!$contact->read)
                            <a href="{{route('admin.contact.read', $contact->id)}}">Marquer comme lu</a>
                        @endif
                        <a href="{{route('admin.contact.delete', $contact->id)}}">Suprimmer</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
