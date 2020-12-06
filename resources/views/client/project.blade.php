@extends('layout.app')

@section('content')
    <div id="project_presentation">
        <div class="project_content_bordered">
            <div class="project_content">
                <section class="pr-p-header">
                    <h1>Webradio Voilquin</h1>
                    <h3><span class="important">Catégorie : </span> Création de site web</h3>
                    <h5>14/28/6412</h5>
                </section>
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line rotated"></div>
                </div>

                <section class="pr-p-image">
                    <img class="img-fluid" src="{{asset('assets/img/portfolio/cake.png')}}" alt="" />
                </section>
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line rotated"></div>
                </div>
                <section class="pr-p-content">
                    <h2>Description : </h2>
                    <p>A falsis, quadra grandis habena. Mori mechanice ducunt ad brevis accentor. Primus bursas ducunt ad rumor. Grandis, emeritis demissios mechanice quaestio de pius, germanus onus. Eheu, palus! Cur detrius resistere?</p>
                    <h2>Fonctionnalités :</h2>
                    <div class="list-of-function">
                        <div class="func-item">The planet is proudly small.</div>
                        <div class="func-item">Why does the processor warp.</div>
                        <div class="func-item">The planet is never cloudy.</div>
                        <div class="func-item">Why does the mermaid view.</div>
                        <div class="func-item">Calm captains, to the habitat proudlymake it so.</div>
                    </div>
                    <h2>Mises à jour :</h2>
                    <div class="list-of-maj">
                        <div class="maj-item" data-toggle="modal" data-target="#v123">
                                V1.2.3
                        </div>
                        <div class="maj-item">V1.1.0</div>
                        <div class="maj-item">V1.0.5</div>
                        <div class="maj-item">V0.1.0</div>
                    </div>
                </section>
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line rotated"></div>
                </div>
                <section class="pr-r-footer">
                    <a>Visiter le site</a>
                    <div class="rate">
                        <h2>notation :</h2>
                        <div class="bottom">
                        <p><span class="important">Client :</span> 5/5</p>
                        <p><span class="important">Utilisateurs :</span> 5/5</p>
                        </div>
                    </div>
                    <a class="reverse"> Créer un ticket</a>
                </section>
            </div>

        </div>
    </div>

<div class="modal fade" id="v123" tabindex="-1" aria-labelledby="v1.2.3Label" aria-hidden="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@endsection

