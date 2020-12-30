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
    <div id="project_create_update">
        <div class="project_create-update">
            <form>
                <div class="form-header">
                    <h1>Ajouter une mise à jour</h1>
                </div>
                @csrf
                <div class="part-form">
                    <label for="NameOfUpdate">Nom :</label>
                    <input type="text" id="NameOfUpdate" name="name" value="V">
                </div>
                <div class="part-form">
                    <label for="updatedesc">Description :</label>
                    <textarea rows="4" id="updatedesc" name="desc"></textarea>
                </div>
                <div class="part-form">
                    <label for="updatecontent">Contenu :</label>
                    <textarea rows="4" id="updatecontent" name="content" placeholder="Utilisation de l'HTML : OK"></textarea>
                </div>
                <div class="part-form check">
                    <label for="advertclient">Avertir le client</label>
                    <input type="checkbox" id="advertclient" name="advertclient">
                </div>
                <div class="part-form check">
                    <label for="publi">Publier</label>
                    <input type="checkbox" id="publi" name="publi">
                </div>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </div>

@endsection
