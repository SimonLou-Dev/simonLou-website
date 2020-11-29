@extends('layout.admin')

@section('content')
<div id="project_all_projects">
    <header>
        <nav class="projects_navbar">
            <form method="post" class="form-inline">
                @csrf
                <ul>
                    <li>
                        <select class="form-control" name="categorie">
                            <option value="0" selected>Choisir un Framework</option>
                            <option>Laravel</option>
                            <option>Wordpress</option>
                            <option>Libre</option>
                        </select>
                    </li>
                    <li>
                        <input class="form-control" type="search" placeholder="Rechercher par nom" name="recherche">
                    </li>
                    <li>
                        <button class="btn btn-outline-success" type="submit">Rechercher</button>
                    </li>
                    <li>
                        <a class="btn btn-outline-success" href="{{route('admin.project.all')}}">Annuler la recherche</a>
                    </li>
                </ul>
            </form>
        </nav>
    </header>
    @if(\Illuminate\Support\Facades\Auth::user())
    <section class="no-shearsh-result">
        <div class="alert alert-danger">
            <h1>Désolé mais nous ne trouvons pas...</h1>
        </div>
    </section>
    @else
    <section class="display">

        <div class="project_item">
            <a href="{{route('admin.project')}}">
            <div class="item-header">
                <h1>Je suis le nom</h1>
            </div>
            <div class="item-content">
                <h2><span>Catégorie :</span> Je suis une catégorie</h2>
                <h2><span>Date de création :</span> Je suis une catégorie</h2>
                <h2><span>Date de maj :</span> Je suis une catégorie</h2>
                <h2><span>Version :</span> Je suis une catégorie</h2>
                <h2><span>Framework :</span> Laravel</h2>
            </div>
            <div class="item-footer">
                <h2>Claude Michalet</h2>
            </div>
            </a>
        </div>
        <div class="project_item">
            <a href="">
                <div class="item-header">
                    <h1>Je suis le nom</h1>
                </div>
                <div class="item-content">
                    <h2><span>Catégorie :</span> Je suis une catégorie</h2>
                    <h2><span>Date de création :</span> Je suis une catégorie</h2>
                    <h2><span>Date de maj :</span> Je suis une catégorie</h2>
                    <h2><span>Version :</span> Je suis une catégorie</h2>
                    <h2><span>Framework :</span> Laravel</h2>
                </div>
                <div class="item-footer">
                    <h2>Claude Michalet</h2>
                </div>
            </a>
        </div>
        <div class="project_item">
            <a href="">
                <div class="item-header">
                    <h1>Je suis le nom</h1>
                </div>
                <div class="item-content">
                    <h2><span>Catégorie :</span> Je suis une catégorie</h2>
                    <h2><span>Date de création :</span> Je suis une catégorie</h2>
                    <h2><span>Date de maj :</span> Je suis une catégorie</h2>
                    <h2><span>Version :</span> Je suis une catégorie</h2>
                    <h2><span>Framework :</span> Laravel</h2>
                </div>
                <div class="item-footer">
                    <h2>Claude Michalet</h2>
                </div>
            </a>
        </div>
        <div class="project_item">
            <a href="">
                <div class="item-header">
                    <h1>Je suis le nom</h1>
                </div>
                <div class="item-content">
                    <h2><span>Catégorie :</span> Je suis une catégorie</h2>
                    <h2><span>Date de création :</span> Je suis une catégorie</h2>
                    <h2><span>Date de maj :</span> Je suis une catégorie</h2>
                    <h2><span>Version :</span> Je suis une catégorie</h2>
                    <h2><span>Framework :</span> Laravel</h2>
                </div>
                <div class="item-footer">
                    <h2>Claude Michalet</h2>
                </div>
            </a>
        </div>
        <div class="project_item">
            <a href="">
                <div class="item-header">
                    <h1>Je suis le nom</h1>
                </div>
                <div class="item-content">
                    <h2><span>Catégorie :</span> Je suis une catégorie</h2>
                    <h2><span>Date de création :</span> Je suis une catégorie</h2>
                    <h2><span>Date de maj :</span> Je suis une catégorie</h2>
                    <h2><span>Version :</span> Je suis une catégorie</h2>
                    <h2><span>Framework :</span> Laravel</h2>
                </div>
                <div class="item-footer">
                    <h2>Claude Michalet</h2>
                </div>
            </a>
        </div>
        <div class="project_item">
            <a href="">
                <div class="item-header">
                    <h1>Je suis le nom</h1>
                </div>
                <div class="item-content">
                    <h2><span>Catégorie :</span> Je suis une catégorie</h2>
                    <h2><span>Date de création :</span> Je suis une catégorie</h2>
                    <h2><span>Date de maj :</span> Je suis une catégorie</h2>
                    <h2><span>Version :</span> Je suis une catégorie</h2>
                    <h2><span>Framework :</span> Laravel</h2>
                </div>
                <div class="item-footer">
                    <h2>Claude Michalet</h2>
                </div>
            </a>
        </div>

    </section>
    @endif


</div>
@endsection
