@extends('layout.app')

@section('content')
    <!--
            1 / 2 tickets :
            <style>
                #list-of-tickets{height: 100vh;}
            </style>

            > 2  tickets:
            <style>
                #list-of-tickets{ height: 100%}
            </style>

            -->
    <div id="list-of-tickets">
        <div class="tickets-content">

            <div class="items">
                <a href="{{route('client.ticket.chat')}}">
                <h5 class="processing"><span class="icon"><i class="fas fa-spinner"></i></span>En cours</h5>
               <div class="item-header">
                   <h2>Je suis le nom</h2>
                   <h4>Je suis la catégorie</h4>
               </div>
                <div class="item-content">
                    <p>Absolutios mori in tectum!Fortis brevis calcaria est. Nunquam locus glos. Calceus magnum accentor est.</p>
                </div>
                <div class="item-footer">
                    <h4>Créé le : 12/23/4126</h4>
                </div>
                </a>
            </div>

            <div class="items">
                <h5 class="processed"><span class="icon"><i class="far fa-check-circle"></i></span>Résolu</h5>
                <div class="item-header">
                    <h2>Je suis le nom</h2>
                    <h4>Je suis la catégorie</h4>
                </div>
                <div class="item-content">
                    <p>Absolutios mori in tectum!Fortis brevis calcaria est. Nunquam locus glos. Calceus magnum accentor est.</p>
                </div>
                <div class="item-footer">
                    <h4>Créé le : 12/03/2524</h4>
                </div>
            </div>

        </div>
    </div>


@endsection
