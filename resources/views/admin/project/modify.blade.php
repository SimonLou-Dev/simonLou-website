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
    </div>
    <div id="modify_project">
        <div class="modify_project">
            <form enctype="multipart/form-data">
                <div class="form_header">
                    <h1>Modifer un project</h1>
                </div>
                <div class="part-form">
                    <label for="projectname">Nom</label>
                    <input id="projectname" name="projectname" type="text" required>
                </div>
                <div class="part-form">
                    <label for="projectdesc">Nom</label>
                    <textarea id="projectdesc" name="projectdesc" required></textarea>
                </div>
                <div class="part-form">
                    <label for="clientmail">Email client</label>
                    <input id="clientmail" name="clientmail" type="email" required>
                </div>
                <div class="part-form">
                    <label for="domain">Domaine</label>
                    <input id="domain" name="domain" type="text" value="https://www." required>
                </div>
                <div class="part-form">
                    <label for="hoster">Hébergeur</label>
                    <input id="hoster" name="hoster" type="text">
                </div>
                <div class="part-form">
                    <label for="img">Image</label>
                    <input id="img" name="img" type="file">
                </div>
                <div class="part-form">
                    <label for="projecttype">Project Type</label>
                    <select id="projecttype" name="projecttype" required>
                        <option>a</option>
                        <option>b</option>
                    </select>
                </div>
                <div class="part-form">
                    <label for="startstatus">Statut de départ</label>
                    <select id="startstatus" name="startstatus" required>
                        <option>a</option>
                        <option>b</option>
                    </select>
                </div>
                <div class="part-form">
                    <label for="languages">Languages</label>
                    <select multiple id="languages" name="languages" required>
                        <option>a</option>
                        <option>b</option>
                        <option>c</option>
                        <option>d</option>
                        <option>SEO</option>
                        <option>design</option>
                    </select>
                </div>
                <div class="checkbox">
                    <div class="line">
                        <label for="clientaccount">Créé un compte client <span>Si il existe pas</span></label>
                        <input id="clientaccount" type="checkbox" name="create_clientaccount">
                    </div>
                    <div class="line">
                        <label for="gitrepo">Create Git repo</label>
                        <input id="gitrepo" type="checkbox" name="create_gitrepo">
                    </div>
                    <div class="line">
                        <label for="public">Public</label>
                        <input id="public" type="checkbox" name="public">
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
