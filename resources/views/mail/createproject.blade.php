<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <style type="text/css">
        body{
            width: 100%;
            height: 100%;
            display: flex;
        }
        .content{
            margin: auto auto;
            max-width: 500px;
            border: #e25f34 1px solid;
            border-radius: 30px;
            background-color: #f7fafc;
            padding: 20px;
        }
        header{
            text-align: center;
        }
        h1, h2, h3, h4, h5, h6, a, span, p{
            font-family: "Montserrat", monospace;
        }
        header h2{
            font-family: "Montserrat", monospace;
            font-weight: 700;
        }
        header h3{
            font-family: "Montserrat", monospace;
            font-weight: 500;
            color: darkgreen;
        }
        .connexion{
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .connexion span{
            text-decoration: underline;
            font-weight: 600;
        }
        .connexion p{
            text-indent: 20px;
        }
        .danger{
            color: red;
            text-indent: 15px;
        }
        .infos span{
            text-decoration: underline;
            font-weight: 600;
        }

    </style>
</head>
<body>
    <div class="content">
        <header>
            <h2>Bonjour {{$user->name}}</h2>
            <h3>Nous vous informons que votre projet viens d'être confirmé !!</h3>
        </header>

        @if($account)
            <section class="connexion">
                <h3>Vous avez déshormais un compte client sur <a href="{{route('login')}}">www.simon-lou.com</a></h3>
                <p><span>Nom d'utilisateur :</span> {{$user->name}}</p>
                <p><span>Mot de passe :</span> {{$password}}</p>
                <p><span>Lien de connexion :</span> <a href="{{route('login')}}">ici</a> </p>
                <p>Une fois connecté vous cliquerez sur mon compte vous pourrez alors choisir entre voir tout les projets communs et tout vous tickets</p>
            </section>
        @else
            <section class="connexion">
                <h3>Vous avez déshormais vous connectez sur votre compte client <a href="{{route('login')}}">www.simon-lou.com</a></h3>
                <p>Une fois connecté vous cliquerez sur mon compte vous pourrez alors choisir entre voir tout les projets communs et tout vous tickets</p>
            </section>
        @endif
        <section class="infos">
            <h3>Voici les informations de votre projet</h3>
            <ul>
                <li><p><span>Numéros de projet :</span> {{$project->id}}</p></li>
                <li><p><span>Description :</span> {{$project->description}}</p></li>
                <li><p><span>Type de projet :</span> {{$project->project_types->name}}</p></li>
                @if($project->ispublic)
                    <li><p><span>Projet public :</span> oui</p></li>
                @else
                    <li><p><span>Projet public :</span> non</p></li>
                @endif

                <li><p><span>Projet Hébergé chez :</span> {{$project->hostedby}}</p></li>
                <li><p><span>Liens vers votre projet :</span> <a href="{{$project->link}}" target="_blank">{{$project->title}}</a></p></li>
            </ul>
            <p class="danger">Vous pouvez à tout moment demander un changement de tout ses paramètres en me contactant</p>
        </section>

        <footer>
            <h3>En cas de problème</h3>
            <ul>
                <li><p>Faites un tickets <a href="{{route('client.ticket.create', $project->id)}}">ici</a></p></li>
                <li><p>Contactez moi par mail : contact@simon-lou.com</p></li>
            </ul>
            <h4>Cordialement, Simon Lou</h4>
        </footer>
    </div>

</body>
</html>
