@extends('admin.mail.layout.mail')

@section('bg')
    <div class="admin-mail-bg bg"></div>
@endsection

@section('mail')
    <div class="mail-box">
        @yield('addsomeele')
        <div class="mail-header">
            <div class="mail-selected-infos">
                <button class="check any">
                    <img src="{{asset('assets/img/icons/empty_checkbox.png')}}">
                </button>
                <button class="check little">
                    <img src="{{asset('assets/img/icons/line_checked_chekbob.png')}}">
                </button>
                <button class="check all">
                    <img src="{{asset('assets/img/icons/checked_chekbox.png')}}">
                </button>
                <button class="add_to_fav selected">
                    <img src="{{asset('assets/img/icons/star.png')}}">
                </button>
                <button class="more_infos">
                    <img src="{{asset('assets/img/icons/three_points.png')}}">
                </button>
            </div>
            <div class="pagination">
                    <a href=""><img src="{{asset('assets/img/icons/right_arrow_head.png')}}"> </a>
                    <p>90-100/100</p>
                    <a href=""><img src="{{asset('assets/img/icons/right_arrow_head.png')}}"></a>
            </div>
        </div>
        <div class="mail" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>C'est un text</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail new" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>C'est un text</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>C'est un text</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>C'est un text</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail new" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>C'est un text</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>C'est un text</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail new" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>C'est un text</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>C'est un text</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>C'est un text</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>C'est un text</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>C'est un text</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>C'est un text</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>C'est un text</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>C'est un text</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>C'est un text</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function (){
            $('.mail').click(function (event){
                window.location = $(this).get(0).getAttribute('data-location');
            });
        });
    </script>



@endsection
