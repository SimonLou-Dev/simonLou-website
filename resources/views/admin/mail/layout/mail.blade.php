@extends('layout.admin')

@section('content')
    <div id="admin-mail">
        @yield('bg')
        <div class="admin-mail">
            <div class="mail-head">
                <nav>
                    <ul>
                        <li><a href="{{route('admin.mail.create')}}">écrire</a></li>
                        <li><a href="{{route('admin.mail')}}">brouillions</a></li>
                        <li><a href="{{route('admin.mail')}}">envoyés</a></li>
                        <li><a href="" class="start"><i class="far fa-star"></i>favoris</a></li>
                        <li><a href="">libéllées</a></li> // Dropdown
                    </ul>
                </nav>
                <div class="text"><h2>Messagerie</h2></div>

            </div>

            @yield('mail')

        </div>
    </div>




@endsection
