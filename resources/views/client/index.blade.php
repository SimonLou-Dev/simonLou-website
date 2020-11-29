@extends('layout.app')

@section('content')
    <div id="list-of-project">
        <div class="project-content">
            <!--
            Un project :
            <style>
                #list-of-project: height: 100vh;
            </style>

            Plusieus projects:
            <style>
                #list-of-project: height: 100%;
            </style>

            -->
            <div class="items">
                <section class="text">
                    <div class="item-header">
                        <h2 class="project_title">Ceci est un projet</h2>
                        <h2><span class="important">Etat :</span> en développement</h2>
                    </div>
                    <div class="item-text">
                        <h2><span class="important">Type :</span> referencement</h2>
                        <p>Victrix de ferox assimilatio, transferre sectam!Ubi est festus onus?Cum consilium favere, omnes seculaes magicae altus, pius detriuses.</p>
                    </div>
                    <div class="footer">
                        <a href="{{route('client.ticket.create')}}">Ouvrir un ticket</a>
                        <a href="">Visiter</a>
                        <a href="{{route('client.project')}}">En voir plus</a>
                        <h2><span class="important">Créé le :</span> 14/52/28</h2>
                    </div>
                </section>
                <section class="img">
                    <img src="{{asset('assets/img/portfolio/cabin.png')}}">
                </section>
            </div>

            <div class="items">
                <section class="text">
                    <div class="item-header">
                        <h2 class="project_title">Ceci est un projet</h2>
                        <h2><span class="important">Statu :</span> en développement</h2>
                    </div>
                    <div class="item-text">
                        <h2><span class="important">Type :</span> referencement</h2>
                        <p>Victrix de ferox assimilatio, transferre sectam!Ubi est festus onus?Cum consilium favere, omnes seculaes magicae altus, pius detriuses.</p>
                    </div>
                    <div class="footer">
                        <a href="">Ouvrir un ticket</a>
                        <a href="">Visiter</a>
                        <a href="">En voir plus</a>
                        <h2><span class="important">Créé le :</span> 14/52/28</h2>
                    </div>
                </section>
                <section class="img">
                    <img src="{{asset('assets/img/portfolio/cabin.png')}}">
                </section>
            </div>


        </div>
    </div>
@endsection
