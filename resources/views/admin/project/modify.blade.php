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
            <h1>{{$project->title}}</h1>
        </div>
    </div>
    <div id="modify_project">
        <div class="modify_project">
            <form enctype="multipart/form-data" method="post" action="{{route('admin.project.modify.post', $project->id)}}">
                @method('PUT')
                @csrf
                <div class="form_header">
                    <h1>Modifer un project</h1>
                </div>
                <div class="part-form">
                    <label for="projectname">Nom</label>
                    <input id="projectname" name="projectname" value="{{$project->title}}" type="text" required>
                </div>
                <div class="part-form">
                    <label for="projectdesc">Description</label>
                    <textarea id="projectdesc" name="projectdesc" required>{{$project->description}}</textarea>
                </div>
                <div class="part-form">
                    <label for="clientmail">Email client</label>
                    <input id="clientmail" name="clientmail" value="{{$project->user->email}}" type="email" required>
                </div>
                <div class="part-form">
                    <label for="domain">Domaine</label>
                    <input id="domain" name="domain" type="text" value="{{$project->link}}" required>
                </div>
                <div class="part-form">
                    <label for="hoster">Hébergeur</label>
                    <input id="hoster" name="hoster" value="{{$project->hostedby}}" type="text">
                </div>
                <div class="part-form">
                    <label for="hostedinfos">Infos hébergement</label>
                    <textarea id="hostedinfos" name="hostedinfos" required>{{$project->hosted_infos}}</textarea>
                </div>
                <div class="part-form">
                    <label for="client_rate">Note Client</label>
                    <input id="client_rate" name="client_rate" required value="{{$project->client_rate}}" type="number">
                </div>
                <div class="part-form">
                    <label for="user_rate">Note Utilisateur</label>
                    <input id="user_rate" name="user_rate" required value="{{$project->user_rate}}" type="number">
                </div>

                <div class="part-form">
                    <label for="projecttype">Project Type</label>
                    <select id="projecttype" name="projecttype" required>
                        @foreach($types as $type)
                            @if($project->type == $type->id)
                                <option value="{{$type->id}}" selected>{{$type->name}}</option>
                            @else
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="part-form">
                    <label for="startstatus">Statut</label>
                    <select id="startstatus" name="startstatus" required>
                        @foreach($statuses as $status)
                            @if($status->id == $project->status)
                                <option value="{{$status->id}}" selected>{{$status->name}}</option>
                            @else
                                <option value="{{$status->id}}">{{$status->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="part-form">
                    <label for="languages">Languages</label>
                    <select multiple id="languages" name="languages[]" required>
                        @foreach($langs as $lang)
                            @if($project->project_lang[$lang->name])
                                <option selected value="{{$lang->id}}">{{$lang->name}}</option>
                            @else
                                <option value="{{$lang->id}}">{{$lang->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="checkbox">
                    <div class="line">
                        <label for="public">Public</label>
                        @if($project->ispublic)
                            <input id="ispublic" type="checkbox" checked name="public">
                        @else
                            <input id="ispublic" type="checkbox"  name="public">
                        @endif

                    </div>
                    <div class="line">
                        <label for="in_wait">En attente</label>
                        @if($project->inwait)
                            <input id="in_wait" type="checkbox" checked name="in_wait">
                        @else
                            <input id="in_wait" type="checkbox"  name="in_wait">
                        @endif
                    </div>
                </div>
                <button type="submit">Valider</button>
            </form>
        </div>
        <div class="add_project_images">
            <div class="images">
                @foreach($imgs as $img)
                    <div class="img">
                        <img src="{{'../../../storage/project/'.$project->id.'/'.$img->path}}" alt="">
                        <h5>{{$img->title}}</h5>
                        <div class="btn">
                            <a href="{{route('admin.project.remove.picture', $img->id)}}">Supprimer</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="form">
                <form method="post" enctype="multipart/form-data" action="{{route('admin.project.add.picture', $project->id)}}">
                    @csrf
                    <div class="part-form">
                        <label>Fichier</label>
                        <input type="file" name="img" required>
                    </div>
                    <div class="part-form">
                        <label>Titre</label>
                        <input type="text" name="title" required>
                    </div>

                    <div class="part-form">
                        <label>Description</label>
                        <textarea rows="2" name="text" required></textarea>
                    </div>
                    <button type="submit">Valider</button>
                </form>
            </div>
        </div>
    </div>


@endsection
