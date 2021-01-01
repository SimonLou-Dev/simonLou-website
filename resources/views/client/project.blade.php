@extends('layout.app')

@section('content')
    <div id="project_presentation">
        <div class="project_content_bordered">
            <div class="project_content">
                <section class="pr-p-header">
                    <h1>{{$project->title}}</h1>
                    <h3><span class="important">Type : </span> {{$project->project_types->name}}</h3>
                    <h5>{{date('d/m/Y', strtotime($project->created_at))}}</h5>
                </section>
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line rotated"></div>
                </div>

                <section class="pr-p-image">
                    <img class="img-fluid" src="{{'../../storage/project/'.$project->id.'/'.$project->main_img}}" alt="" />
                </section>
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line rotated"></div>
                </div>
                <section class="pr-p-content">
                    <h2>Etat du projet : </h2>
                    <p>{{$project->getstatus->name}}</p>
                    <h2>Description : </h2>
                    <p>{{$project->description}}</p>
                    <h2>Languages :</h2>
                    <div class="list-of-function">
                        @foreach($langs as $lang)
                            @if($project->project_lang[$lang->name])
                                <div class="func-item">{{$lang->category}} : {{$lang->name}}</div>
                            @endif
                        @endforeach
                    </div>
                    <h2>Mises à jour :</h2>
                    <div class="list-of-maj">
                        @foreach($majs as $maj)
                            <div class="maj-item" data-toggle="modal" data-target="#{{str_replace(".","",$maj->version)}}">
                                {{$maj->version}}
                            </div>
                        @endforeach
                    </div>
                </section>
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line rotated"></div>
                </div>
                <section class="pr-r-footer">
                    <a href="{{$project->link}}" target="_blank">Visiter le site</a>
                    <div class="rate">
                        <h2>notation :</h2>
                        <div class="bottom">
                        <p><span class="important">Client :</span> {{$project->client_rate}}/5</p>
                        <p><span class="important">Utilisateurs :</span> {{$project->user_rate}}/5</p>
                        </div>
                    </div>
                    <a class="reverse" href="{{route('client.ticket.create', $project->id)}}"> Créer un ticket</a>
                </section>
            </div>

        </div>
    </div>
@foreach($majs as $maj)
    <div class="modal fade" id="{{str_replace(".","",$maj->version)}}" tabindex="-1" aria-labelledby="{{str_replace(".","",$maj->version)}}Label" aria-hidden="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{$maj->version}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{$maj->content}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection

