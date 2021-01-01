@extends('layout.app')

@section('content')
    <div id="list-of-project">
        <div class="project-content">
            @foreach($projects as $project)
                <div class="items">
                    <section class="text">
                        <div class="item-header">
                            <h2 class="project_title">{{$project->title}}</h2>
                            <h2><span class="important">Etat :</span> {{$project->getstatus->name}}</h2>
                        </div>
                        <div class="item-text">
                            <h2><span class="important">Type :</span> {{$project->project_types->name}}</h2>
                            <p>{{$project->description}}</p>
                        </div>
                        <div class="footer">
                            <a href="{{route('client.ticket.create', $project->id)}}">Ouvrir un ticket</a>
                            <a href="{{$project->link}}">Visiter</a>
                            <a href="{{route('client.project', $project->id)}}">En voir plus</a>
                            <h2><span class="important">Créé le :</span>{{date('d/m/Y', strtotime($project->created_at))}}</h2>
                        </div>
                    </section>
                    <section class="img">
                        <img src="{{'../storage/project/'.$project->id.'/'.$project->main_img}}">
                    </section>
                </div>
            @endforeach
        </div>
    </div>
@endsection
