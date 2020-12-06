@extends('layout.admin')

@section('content')
    <div id="projet_admin_menu">
        <nav>
            <ul>
                <li><a href="{{route('admin.project')}}">Main</a> </li>
                <li><a href="{{route('admin.project.board')}}">Board</a> </li>
                <li><a href="{{route('admin.project.modify')}}">Modifier</a></li>
            </ul>
        </nav>
        <div class="name">
            <h1>Project Name</h1>
        </div>


@endsection
