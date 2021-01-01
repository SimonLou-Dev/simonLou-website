@extends('layout.admin')
@section('content')
    <div id="admin_index">
        <section class="list_project">
            <div class="admin_card">
                <div class="card_header">
                    <h2 class="text">Projets</h2>
                    <h2><i class="fas fa-stream"></i></h2>
                </div>
                <div class="card_content">
                    @foreach($projects as $project)
                        <div class="card-content_item project">
                            <p class="text">{{$project->title}}</p>
                            <a href="{{route('admin.project', $project->id)}}"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="divers_infos">
            <div class="admin-popup">
                <p><span class="number">{{$infos['contact']}}</span> nouveau(x) contact(s)</p>
            </div>
            <div class="admin-popup">
                <p><span class="number">{{$infos['tickets']}}</span> nouveau(x) ticket(s)</p>
            </div>
            <div class="admin-popup">
                <p><span class="number">{{$infos['ended']}}</span> projets terminés</p>
            </div>
            <div class="admin-popup">
                <p><span class="number">{{$infos['in_wait']}}</span> projet(s)s en attente</p>
            </div>
        </section>

    </div>
@endsection
