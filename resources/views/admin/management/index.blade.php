@extends('layout.admin')

@section('content')
    <div id="content-management">
        <div class="content-management">
            <section class="manager">
                <div class="header">
                    <h1>Catégorie des tickets</h1>
                </div>
                <div class="add">
                    <h2>Ajouter</h2>
                    <form>
                        <input type="text" name="new_tickets_categorie">
                        <button type="submit">Valider</button>
                    </form>
                </div>
                <div class="delet">
                    <h2>Supprimer</h2>
                    <form>
                        <select name="delet_tickets_categorie">
                            <option>a</option>
                        </select>
                        <button type="submit">Valider</button>
                    </form>
                </div>
            </section>
            <section class="manager">
                <div class="header">

                    <h1>Statut des projets</h1>
                </div>
                <div class="add">
                    <h2>Ajouter</h2>
                    <form>
                        <input type="text" name="new_project_status">
                        <button type="submit">Valider</button>
                    </form>
                </div>
                <div class="delet">
                    <h2>Supprimer</h2>
                    <form>
                        <select name="delet_project_status">
                            <option>a</option>
                        </select>
                        <button type="submit">Valider</button>
                    </form>
                </div>
            </section>
            <section class="manager">
                <div class="header">
                    <h1>Liste des languages</h1>
                </div>
                <div class="add">
                    <h2>Ajouter</h2>
                    <form>
                        <input type="text" name="new_lang">
                        <select name="lang_categorie">
                            <option>Technologie</option>
                            <option>Framework</option>
                            <option>Language</option>
                        </select>
                        <button type="submit">Valider</button>
                    </form>
                </div>
            </section>
        </div>
    </div>

@endsection
