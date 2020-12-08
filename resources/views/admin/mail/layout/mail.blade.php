@extends('layout.admin')

@section('content')
    <div id="admin-mail">
        @yield('bg')
        <div class="admin-mail">
            <div class="mail-head">
                <nav>
                    <ul>
                        <li><a href="{{route('admin.mail')}}">Accueil</a></li>
                        <li><a href="{{route('admin.mail')}}">Envoyés</a></li>
                        <li><a href="{{route('admin.mail.create')}}">Nouveau</a></li>
                        <li><a href="" class="start"><i class="far fa-star"></i></a></li>
                    </ul>
                </nav>
                <div class="text"><h2>Messagerie</h2></div>

            </div>

            @yield('mail')

        </div>
    </div>




@endsection
