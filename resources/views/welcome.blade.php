@extends('layout.app')

@section('content')
@include('incs.head')

    <!-- Section Portfolio-->
    <section id="portfolio">
        <div class="portfolio_div">
        <!-- Portfolio header -->
        <div class="portfolio_header">
            <h1>Portfolio</h1>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fas fa-star"></i> Font Awesome fontawesome.com --></div>
                <div class="divider-custom-line"></div>
            </div>
        </div>
        <!-- Porfolio art -->
        <div class="portfolio_content">


            @foreach($projects as $project)
                <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="{{'storage/project/'.$project->id.'/'.$project->main_img}}" alt="" />
                    <div class="portfolio_info">
                        <div>
                            <h6>{{date('d/m/Y', strtotime($project->created_at))}}</h6>
                            <h5>{{$project->title}}</h5>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Portfolio Modal -->
                <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                        <div class="modal-body">
                            <div class="container">
                                <div class="">
                                    <div class="">
                                        <!-- Portfolio Modal - header-->
                                        <div class="portfolio_modal_header">
                                            <h2 class="portfolio-modal-title">{{$project->title}}</h2>
                                            <h6 class="portfolio-modal-date">{{date('d/m/Y', strtotime($project->created_at))}}</h6>

                                        </div>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - content -->
                                        <div class="portfolio_modal_content">
                                            <!-- Content carousel -->
                                            <section class="portfolio-modal-rowed">
                                                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="assets/img/portfolio/cabin.png" class="d-block w-100" alt="...">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h5>First slide label</h5>
                                                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="assets/img/portfolio/cabin.png" class="d-block w-100" alt="...">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h5>Second slide label</h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="assets/img/portfolio/cabin.png" class="d-block w-100" alt="...">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h5>Third slide label</h5>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                                <div class="pm_infos">
                                                    <div class="pm_apptype">
                                                        <h5>Type de projet : </h5>
                                                        @php
                                                            $projecttype = App\Models\project_types::find($project->type)->first();
                                                        @endphp
                                                        <p>{{$projecttype->name}}</p>
                                                    </div>
                                                    <div class="pm_languages">
                                                        <h5>Languages & Framework : </h5>
                                                        <div class="LF-list">
                                                            @php
                                                                $projectlangs = App\Models\project_lang::where('project_id', $project->id)->first();
                                                            @endphp
                                                            @foreach($langs as $lang)
                                                                @if($projectlangs[$lang->name])
                                                                    <div class="LF-name">{{$lang->name}}</div>
                                                                @endif

                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="pm_update">
                                                        <h5>Version & Mise à jour : </h5>
                                                        @php
                                                            $maj = App\Models\project_updates::all()->where('project_id', $project->id)->sortBy('created_at')->first();
                                                        @endphp
                                                        <h6><span>Dernière mise à jour :</span>{{date('d/m/Y', strtotime($maj->created_at))}}</h6>
                                                        <h6><span>Version :</span>{{$maj->version}}</h6>
                                                    </div>
                                                    <div class="pm_avis">
                                                        <h5>Avis : </h5>
                                                        <h6><span>Demandeur :</span> {{$project->client_rate}}</h6>
                                                        <h6><span>Utilisateur :</span>{{$project->user_rate}}</h6>
                                                    </div>
                                                    <div class="pm_link">
                                                        <a href="{{$project->link}}">Visiter le site</a>
                                                    </div>
                                                </div>

                                            </section>

                                            <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                <div class="divider-custom-line"></div>
                                            </div>

                                            <!-- Portfolio Modal - Text and infos -->
                                            <div class="portfolio_modal_text_infos">
                                                <div class="pm_text">
                                                    <p>{{$project->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @endforeach

        </div>
        </div>
    </section>

    <section id="about">
        <div class="about_header">
            <h1>A Propos</h1>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fas fa-star"></i> Font Awesome fontawesome.com --></div>
                <div class="divider-custom-line"></div>
            </div>
        </div>
        <div class="about_content">
            <div class="about_content-container">
                <div class="lang_and_frame">
                    <div id="ab-head">
                        <h1>Capacités</h1>
                    </div>
                    <div id="ab-content">

                        <section id="ab-Framework">
                            <h2>Framework :</h2>

                            <section class="ab-FLT-content">
                                @foreach($langs as $lang)
                                    @if($lang->category == "Framework")
                                        <div class="fmw-item">{{$lang->name}}</div>
                                    @endif
                                @endforeach
                            </section>
                        </section>
                        <section id="ab-lang">
                            <h2>Languages :</h2>
                            <section class="ab-FLT-content">
                                @foreach($langs as $lang)
                                    @if($lang->category == "Language")
                                        <div class="lang-item">{{$lang->name}}</div>
                                    @endif
                                @endforeach
                            </section>
                        </section>
                        <section id="ab-tech">
                            <h2>Technologies :</h2>
                            <section class="ab-FLT-content">
                                @foreach($langs as $lang)
                                    @if($lang->category == "Technologie")
                                        <div class="tech-item">{{$lang->name}}</div>
                                    @endif
                                @endforeach
                            </section>
                        </section>
                    </div>
                </div>
                <div class="presentation">
                    <div class="presentation-header">
                        <h1>Présentation : </h1>
                    </div>
                    <div class="presentation-content">
                        <div class="pr-head">
                            <p class="name">Simon Lou</p>
                            <img src="{{asset('assets/img/avatar.png')}}">
                        </div>
                        <p class="etudes"><span>Etudes :</span> Lycéen (voie générale)</p>
                        <p class="text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus interdum sapien sem, eu malesuada velit aliquet eu. Mauris placerat neque eget gravida interdum. Cras nunc velit, fringilla a luctus quis, accumsan pulvinar purus. Curabitur in eros ac turpis auctor tincidunt a eu nisl. Vestibulum aliquet laoreet enim hendrerit cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam a ex massa. Phasellus vel mi commodo, viverra tellus vitae, varius lorem. <br></p>

                        <p class="text"> In vel odio non nisi pretium pretium. Mauris eget magna pretium, blandit orci vel, condimentum neque. Praesent nulla neque, tempus quis tortor id, fringilla molestie quam. Mauris congue aliquam purus, vel congue odio pretium ut. Suspendisse lobortis nunc eu ligula interdum imperdiet. Nam egestas dignissim sagittis. Etiam quam orci, ornare sed tincidunt et, viverra ut libero. </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="services_header">
            <h1>Services</h1>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fas fa-star"></i> Font Awesome fontawesome.com --></div>
                <div class="divider-custom-line"></div>
            </div>
        </div>
        <div class="services_content">
            <div class="services_item">
                <div class="services_item-head">
                <i class="fas fa-server"></i>
                </div>
                <div class=serv_item-separator></div>
                <div class="services_item-content">
                    <h1>Hébergement</h1>
                    <p>Cur nuclear vexatum iacere resistere?Mineraliss peregrinationes in ostravia!Bromium ridetiss, tanquam magnum pars.</p>
                    <ul>
                        <li>Serveurs dédiées</li>
                        <li>Serveurs dans le cloud</li>
                    </ul>
                </div>
            </div>

            <div class="services_item">
                <div class="services_item-head">
                    <i class="fas fa-tools"></i></div>
                <div class=serv_item-separator></div>
                <div class="services_item-content">
                    <h1>Maintenance</h1>
                    <p>Cur nuclear vexatum iacere resistere?Mineraliss peregrinationes in ostravia!Bromium ridetiss, tanquam magnum pars.</p>
                    <ul>
                        <li>Correction du bug</li>
                        <li>Maintenance WordPress</li>
                        <li>Maintenance E-commerce</li>
                    </ul>
                </div>
            </div>

            <div class="services_item">
                <div class="services_item-head">
                    <i class="fas fa-search"></i>
               </div>
                <div class=serv_item-separator></div>
                <div class="services_item-content">
                    <h1>Référencement & positionnement (SEO)</h1>
                    <p>Cur nuclear vexatum iacere resistere?Mineraliss peregrinationes in ostravia!Bromium ridetiss, tanquam magnum pars.</p>
                    <ul>
                        <li>Temps de chargement des pages optimisés</li>
                        <li>Indexation automatique des pages</li>
                        <li>Intégration des différents réseaux sociaux</li>
                        <li>Outils d'analyses de trafique</li>
                    </ul>
                </div>
            </div>

            <div class="services_item">
                <div class="services_item-head">
                    <i class="fas fa-drafting-compass"></i>
                </div>
                <div class=serv_item-separator></div>

                <div class="services_item-content">
                    <h1>Web design</h1>
                    <p>Cur nuclear vexatum iacere resistere?Mineraliss peregrinationes in ostravia!Bromium ridetiss, tanquam magnum pars.</p>
                    <ul>
                        <li>Design de site internet</li>
                        <li>Mise en page de contenu</li>
                    </ul>
                </div>
            </div>

            <div class="services_item">
                <div class="services_item-head">
                    <i class="far fa-file-code"></i></div>
                <div class=serv_item-separator></div>
                <div class="services_item-content">
                    <h1>Développement de site web</h1>
                    <p>Cur nuclear vexatum iacere resistere?Mineraliss peregrinationes in ostravia!Bromium ridetiss, tanquam magnum pars.</p>
                    <ul>
                        <li>Site sur mesures</li>
                        <li>Site vitrine</li>
                        <li>Site e-commerce</li>
                        <li>Intranet</li>
                        <li>Web-App</li>
                        <li>Blog</li>
                        <li>Wiki</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="contact_header">
            <h1>Contact</h1>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fas fa-star"></i> Font Awesome fontawesome.com --></div>
                <div class="divider-custom-line"></div>
            </div>
        </div>
        <div class="contact_content">
            <div class="contact_form">
                <form method="post" action="{{route('contact')}}">
                    @csrf
                    <div class="form-part">
                        <label>Nom :</label>
                        <input class="from-input" type="text" name="nom" required>
                    </div>
                    <div class="form-part">
                        <label>Email :</label>
                        <input class="from-input" type="text" name="email" required>
                    </div>
                    <div class="form-part">
                        <label>Message :</label>
                        <textarea class="from-input" rows="4" name="message" required></textarea>
                    </div>
                    <button type="submit" class="from-btn">Envoyer</button>
                </form>
            </div>
        </div>
    </section>
@endsection

