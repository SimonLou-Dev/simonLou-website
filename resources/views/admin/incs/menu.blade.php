<div class="admin_menu">
    <nav class="admin_nav">
        <ul class="menu_admin_main">
            <li class="nav-item primary">
                <a href="{{route('admin.index')}}" class="nav-link">Accueil</a>
            </li>
            <li class="nav-item dropper">
                <a id="btn_list_project" class="nav-link btn_dropper"><span class="menu_dropper"><i id="img_project" class="fas fa-angle-down"></i></span> Projets</a>
                <ul class="dropped scroll" id="list_project">
                    <li class="dropped-item disable">
                        <a href="{{route('admin.project.all')}}">Voir tout</a>
                    </li>
                    <li class="dropped-item">
                        <a href="{{route('admin.project.create')}}">Créé un projet</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.tickets')}}" class="nav-link">Tickets</a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.todolist')}}" class="nav-link">To do List</a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.contact')}}" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.mail')}}" class="nav-link">Messagerie</a>
            </li>
            <li class="nav-item dropper">
                <a id="btn_site_management" class="nav-link  btn_dropper"><span class="menu_dropper" ><i id="img_site_management" class="fas fa-angle-down"></i></span> Gestion du site</a>
                <ul class="dropped" id="site_management">
                    <li class="dropped-item">
                        <a href="{{route('admin.management.user')}}">Liste des utilisateurs</a>
                    </li>
                    <li class="dropped-item">
                        <a href="{{route('admin.management.content')}}">Gestion de contenu</a>
                    </li>

                </ul>
            </li>
        </ul>
    </nav>
</div>
<script type="text/javascript">
    $( document ).ready(function() {

        var project = false;
        var management = false;
        $('#btn_site_management').click(function (){
            management_func(management);
        });

        management_func(true);


        $('#btn_list_project').click(function (){
            project_func(project)
        });

        project_func(true);

        function management_func(bool){
            if(bool){
                $('#img_site_management').css({'transform': 'rotate(270deg)'});
                $('#site_management').hide();
                management = false
            }else{
                $('#img_site_management').css({'transform': 'rotate(0deg)'});
                $('#site_management').show();
                management = true
            }
        }

        function project_func(bool){
            if(bool){
                $('#img_project').css({'transform': 'rotate(270deg)'});
                $('#list_project').hide();
                project = false
            }else{
                $('#img_project').css({'transform': 'rotate(0deg)'});
                $('#list_project').show();
                project = true
            }
        }







    });
</script>
