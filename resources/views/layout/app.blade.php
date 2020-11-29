<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- My Css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- App js -->
    <script src="{{asset('js/app.js')}}"></script>


    <title>Simon Lou</title>
</head>
<body>

@include('incs.header')

@yield('content')


<footer class="footer">
    <div class="contact_me">
        <h3>Contact : </h3>
        <h4>Simon Lou (Simon Bidet)</h4>
        <h4>dev.simon.lou@gmail.com</h4>

    </div>
    <div class="infos">
        <h3>Développeur Web</h3>
        <p>Développeur Web, je suis à votre disposition pour répondre à tout type de projets de création de sites internet vitrine, e-commerce, de développement spécifique ou d’applications web.</p>
        <p>Passionné par les technologies Web, je mets mes compétences au service de vos besoins dans divers domaines.</p>
    </div>
</footer>



<!--  jQuery, Popper.js, and Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<!-- Jquerry UI -->
<script src="{{asset('js/jquery-ui/jquery-ui.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('js/jquery-ui/jquery-ui.min.css')}}">


<script type="text/javascript">



    $("a[href*='#']:not([href='#'])").click(function() {
        if (
            location.hostname == this.hostname
            && this.pathname.replace(/^\//,"") == location.pathname.replace(/^\//,"")
        ) {
            var anchor = $(this.hash);
            anchor = anchor.length ? anchor : $("[name=" + this.hash.slice(1) +"]");
            if ( anchor.length ) {

                $('html, body').animate({
                    scrollTop: (anchor.offset().top - 70)
                }, 700, "easeInOutExpo");
            }
        }
    });
</script>

</body>
</html>
