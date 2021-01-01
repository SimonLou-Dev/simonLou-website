@extends('layout.admin')

@section('content')
    <div id="create_project">
        <div class="create_project">
            <form enctype="multipart/form-data" method="post" action="{{route('admin.project.store')}}">
                @csrf
                <div class="form_header">
                    <h1>Créer un project</h1>
                </div>
                <div class="part-form">
                    <label for="projectname">Nom</label>
                    <input id="projectname" name="projectname" type="text" required>
                </div>
                <div class="part-form">
                    <label for="projectdesc">Description</label>
                    <textarea id="projectdesc" name="projectdesc" required></textarea>
                </div>
                <div class="part-form">
                    <label for="clientmail">Email client</label>
                    <input id="clientmail" name="clientmail" type="email" required>
                </div>
                <div class="part-form">
                    <label for="clientname">Nom client</label>
                    <input id="clientname" name="clientname" type="text" required>
                </div>
                <div class="part-form">
                    <label for="domain">Domaine</label>
                    <input id="domain" name="domain" type="text" value="https://www." required>
                </div>
                <div class="part-form">
                    <label for="hoster">Hébergeur</label>
                    <input id="hoster" name="hoster" type="text" required>
                </div>
                <div class="part-form">
                    <label for="hostedinfos">Infos hébergement</label>
                    <textarea id="hostedinfos" name="hostedinfos" required></textarea>
                </div>
                <div class="part-form">
                    <label for="img">Image</label>
                    <input id="img" name="img" type="file" required>
                </div>
                <div class="part-form">
                    <label for="projecttype">Project Type</label>
                    <select id="projecttype" name="projecttype" required>
                        @foreach($types as  $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="part-form">
                    <label for="startstatus">Statut de départ</label>
                    <select id="startstatus" name="startstatus" required>
                        @foreach($statuses as  $status)
                            <option value="{{$status->id}}">{{$status->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="part-form">
                    <label for="languages">Languages</label>
                    <select multiple id="languages" name="languages[]" required>
                        @foreach($langs as  $lang)
                            <option value="{{$lang->id}}">{{$lang->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="checkbox">
                    <div class="line">
                        <label for="ispublic">Public</label>
                        <input id="ispublic" type="checkbox" name="ispublic">
                    </div>
                    <div class="line">
                        <label for="in_wait">En attente</label>
                        <input id="in_wait" type="checkbox" name="in_wait">
                    </div>
                    <div class="line">
                        <label for="advert_client">Avertir le client</label>
                        <input id="advert_client" type="checkbox" name="advert_client">
                    </div>
                </div>
                <button type="submit">Valider</button>
            </form>
        </div>
    </div>


@endsection
