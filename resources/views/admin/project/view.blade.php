@extends('layout.admin')

@section('content')
    <div id="projet_admin_menu">
            <nav>
                <ul>
                    <li><a href="{{route('admin.project', $project->id)}}">Main</a> </li>
                    <li><a href="{{route('admin.project.board', $project->id)}}">Board</a> </li>
                    <li><a href="{{route('admin.project.modify', $project->id)}}">Modifier</a></li>
                </ul>
            </nav>
        <div class="name">
            <h1>Project Name</h1>
        </div>
    </div>
    <div id="view_project">
        <div class="view-project">
            <section class="infos">
                <div class="project-card">
                    <div class="project-card_header">
                        <h2>Informations sur le projet</h2>
                    </div>
                    <div class="project-card_content projectinfos">
                        <h5><span>état : </span>{{$project->getstatus->name}}</h5>
                        <h5><span>date de création : </span>{{date_format($project->created_at, 'd/m/Y')}}</h5>
                        @if(!empty($lastmaj))
                            <h5><span>dernière maj : </span>{{date('d/m/Y', strtotime($lastmaj->created_at))}}</h5>
                            <h5><span>version : </span>{{$lastmaj->version}}</h5>
                        @else
                            <h5><span>dernière maj : </span>pas de maj</h5>
                            <h5><span>version : </span>pas de maj</h5>
                        @endif


                        <h5><span>Type : </span>{{$project->project_types->name}}</h5>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-card_header">
                        <h2>Informations sur le client</h2>
                    </div>
                    <div class="project-card_content clintinfos">
                        <h5><span>Mail : </span>{{$project->user->email}}</h5>
                        <h5><span>Nom & prenom: </span>{{$project->user->name}}</h5>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-card_header">
                        <h2>Description du projet</h2>
                    </div>
                    <div class="project-card_content projectdesc">
                        <p>
                          {{$project->description}}
                        </p>
                    </div>
                </div>
            </section>
            <section class="maj">
                <div class="maj-list">
                    <div class="maj-list_header">
                        <h1>Liste des majs</h1>
                        <a href="{{route('admin.project.update.create', [$project->id])}}"><i class="fas fa-plus"></i></a>
                    </div>
                    <div class="maj-list_content">
                        <div class="maj-box-container">
                            @foreach($project->project_updates as $update)
                                <div class="maj-box" id="{{$update->version}}">
                                    <div class="maj-box_header">
                                        <h3 target="{{$update->version}}"><span><i class="fas fa-angle-down icon" target="{{$update->version}}"></i></span>{{$update->version}} :</h3>
                                    </div>
                                    <div class="maj-box_content">
                                        <p>
                                            {{$update->content}}
                                        </p>
                                    </div>
                                    <div class="maj-box_footer">
                                        <p>Publiée</p>
                                        @if($update->publisched)
                                            <a><i class="far fa-check-square"></i></a>
                                        @else
                                            <a href="{{route('admin.project.update.publish', $update->id)}}"><i class="far fa-square"></i></a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<script type="text/javascript">
    $( document ).ready(function() {
        $('.maj-box').addClass('folded');

        $('h3').click(function (event){
            var elem = $(this).get(0);
            var attr = elem.getAttribute('target')
            var target = document.getElementById(attr);
            if(target != null){
                if(target.classList.contains('folded')){
                    target.classList.remove('folded');
                    target.classList.add('unfolded');
                }else{
                    target.classList.add('folded');
                    target.classList.remove('unfolded');
                }
            }

        });

    });
</script>

@endsection
