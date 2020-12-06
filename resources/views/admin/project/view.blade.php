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
    <div id="view_project">
        <div class="view-project">
            <section class="infos">
                <div class="project-card">
                    <div class="project-card_header">
                        <h2>Informations sur le projet</h2>
                    </div>
                    <div class="project-card_content projectinfos">
                        <h5><span>état :</span> En cours de développement</h5>
                        <h5><span>date de création :</span> 13/02/2004</h5>
                        <h5><span>dernière maj :</span> 13/01/2005</h5>
                        <h5><span>version :</span> V1.5.8</h5>
                        <h5><span>Type :</span> projet web</h5>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-card_header">
                        <h2>Informations sur le client</h2>
                    </div>
                    <div class="project-card_content clintinfos">
                        <h5><span>Mail :</span> jean.claude.maire@uneboitedefou.com</h5>
                        <h5><span>Nom & prenom:</span> José Marie Collé</h5>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-card_header">
                        <h2>Description du projet</h2>
                    </div>
                    <div class="project-card_content projectdesc">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae purus scelerisque, tempor justo nec, auctor mi. Donec non augue ut nunc viverra malesuada vitae nec nibh. Morbi facilisis enim nisi, ac ultricies nunc congue eu. Vestibulum vehicula, mi maximus rhoncus auctor, enim dolor blandit orci, iaculis
                        </p>
                    </div>
                </div>
            </section>
            <section class="maj">
                <div class="maj-list">
                    <div class="maj-list_header">
                        <h1>Liste des majs</h1>
                        <a href="{{route('admin.project.update.create')}}"><i class="fas fa-plus"></i></a>
                    </div>
                    <div class="maj-list_content">
                        <div class="maj-box-container">
                            <div class="maj-box" id="V1_2_3">
                                <div class="maj-box_header">
                                    <h3 target="#V1_2_3"><span><i class="fas fa-angle-down icon" target="#V1_2_3"></i></span>V1.2.3 :</h3>
                                </div>
                                <div class="maj-box_content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae purus scelerisque, tempor justo nec
                                    </p>
                                </div>
                            </div>
                            <div class="maj-box">
                                <div class="maj-box_header folded">
                                    <h3><span><i class="fas fa-angle-down" data-target="#V1.2.2"></i></span>V1.2.2 :</h3>
                                </div>
                                <div class="maj-box_content" id="V1.2.2">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae purus scelerisque, tempor justo nec
                                    </p>
                                </div>
                            </div>
                            <div class="maj-box">
                                <div class="maj-box_header">
                                    <h3><span><i class="fas fa-angle-down"></i></span>V1.2.3 :</h3>
                                </div>
                                <div class="maj-box_content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae purus scelerisque, tempor justo nec
                                    </p>
                                </div>
                            </div>
                            <div class="maj-box">
                                <div class="maj-box_header">
                                    <h3><span><i class="fas fa-angle-down"></i></span>V1.2.3 :</h3>
                                </div>
                                <div class="maj-box_content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae purus scelerisque, tempor justo nec
                                    </p>
                                </div>
                            </div>
                            <div class="maj-box">
                                <div class="maj-box_header">
                                    <h3><span><i class="fas fa-angle-down"></i></span>V1.2.3 :</h3>
                                </div>
                                <div class="maj-box_content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae purus scelerisque, tempor justo nec
                                    </p>
                                </div>
                            </div>

                            <div class="maj-box">
                                <div class="maj-box_header">
                                    <h3><span><i class="fas fa-angle-down"></i></span>V1.2.3 :</h3>
                                </div>
                                <div class="maj-box_content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae purus scelerisque, tempor justo nec
                                    </p>
                                </div>
                            </div>
                            <div class="maj-box">
                                <div class="maj-box_header">
                                    <h3><span><i class="fas fa-angle-down"></i></span>V1.2.3 :</h3>
                                </div>
                                <div class="maj-box_content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae purus scelerisque, tempor justo nec
                                    </p>
                                </div>
                            </div>
                            <div class="maj-box">
                                <div class="maj-box_header">
                                    <h3><span><i class="fas fa-angle-down"></i></span>V1.2.3 :</h3>
                                </div>
                                <div class="maj-box_content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae purus scelerisque, tempor justo nec
                                    </p>
                                </div>
                            </div>
                            <div class="maj-box">
                                <div class="maj-box_header">
                                    <h3><span><i class="fas fa-angle-down"></i></span>V1.2.3 :</h3>
                                </div>
                                <div class="maj-box_content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae purus scelerisque, tempor justo nec
                                    </p>
                                </div>
                            </div>
                            <div class="maj-box">
                                <div class="maj-box_header">
                                    <h3><span><i class="fas fa-angle-down"></i></span>V1.2.3 :</h3>
                                </div>
                                <div class="maj-box_content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae purus scelerisque, tempor justo nec
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<script type="text/javascript">
    $( document ).ready(function() {
        $('.maj-box').addClass('folded');
        
        $('h3').click(function (event){
            var elem = $(this).get(0);
            var attr = elem.getAttribute('target')
            var target = $(attr);
            if(target != null){
                if(target.hasClass('folded')){
                    target.removeClass('folded');
                    target.addClass('unfolded');
                }else{
                    target.addClass('folded');
                    target.removeClass('unfolded');
                }
            }

        });

    });
</script>

@endsection
