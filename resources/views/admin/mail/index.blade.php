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

                <button class="add_to_fav">
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
        <div class="mail" id="mail_1" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
                <button class="mail_unselected"><a> <img  src="{{asset('assets/img/icons/empty_checkbox.png')}}"></a></button>
                <button class="mail_selected"><a> <img src="{{asset('assets/img/icons/checked_chekbox.png')}}"></a></button>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>Cur mineralis potus? Talis, castus consiliums sed mire fallere de raptus, noster lixa.</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail" id="mail_2" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
                <button class="mail_unselected"><a> <img  src="{{asset('assets/img/icons/empty_checkbox.png')}}"></a></button>
                <button class="mail_selected"><a> <img src="{{asset('assets/img/icons/checked_chekbox.png')}}"></a></button>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>Cur mineralis potus? Talis, castus consiliums sed mire fallere de raptus, noster lixa.</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail new" id="mail_3" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
                <button class="mail_unselected"><a> <img  src="{{asset('assets/img/icons/empty_checkbox.png')}}"></a></button>
                <button class="mail_selected"><a> <img src="{{asset('assets/img/icons/checked_chekbox.png')}}"></a></button>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>Cur mineralis potus? Talis, castus consiliums sed mire fallere de raptus, noster lixa.</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail" id="mail_4" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
                <button class="mail_unselected"><a> <img  src="{{asset('assets/img/icons/empty_checkbox.png')}}"></a></button>
                <button class="mail_selected"><a> <img src="{{asset('assets/img/icons/checked_chekbox.png')}}"></a></button>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>Cur mineralis potus? Talis, castus consiliums sed mire fallere de raptus, noster lixa.</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail" id="mail_5" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
                <button class="mail_unselected"><a> <img  src="{{asset('assets/img/icons/empty_checkbox.png')}}"></a></button>
                <button class="mail_selected"><a> <img src="{{asset('assets/img/icons/checked_chekbox.png')}}"></a></button>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>Cur mineralis potus? Talis, castus consiliums sed mire fallere de raptus, noster lixa.</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail" id="mail_6" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
                <button class="mail_unselected"><a> <img  src="{{asset('assets/img/icons/empty_checkbox.png')}}"></a></button>
                <button class="mail_selected"><a> <img src="{{asset('assets/img/icons/checked_chekbox.png')}}"></a></button>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>Cur mineralis potus? Talis, castus consiliums sed mire fallere de raptus, noster lixa.</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
        <div class="mail" id="mail_7" data-location="{{route('admin.mail.read')}}">
            <div class="action mail-content">
                <h2><a href=""> <i class="far fa-star"></i></a></h2>
                <h2><a href=""><i class="fas fa-reply"></i></a></h2>
                <button class="mail_unselected"><a> <img  src="{{asset('assets/img/icons/empty_checkbox.png')}}"></a></button>
                <button class="mail_selected"><a> <img src="{{asset('assets/img/icons/checked_chekbox.png')}}"></a></button>
            </div>
            <div class="sender mail-content">
                <h2>Pas Nous</h2>
            </div>
            <div class="object mail-content">
                <h2>Cur mineralis potus? Talis, castus consiliums sed mire fallere de raptus, noster lixa.</h2>
            </div>
            <div class="date mail-content">
                <h2>17/29/1000 à 00:00</h2>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        var selecting;
        var allselected;
        var over;
        var quelquesun;
        $(document).ready(function (){
            $('.add_to_fav').hide()
            $('.little').hide()
            $('.all').hide();
            $('.mail_selected').hide();
            $('.mail_unselected').hover(function (event){
                over = true
            },function (){
                over = false
            })
            $('.mail_selected').hover(function (event){
                over = true
            },function (){
                over = false
            })


            $('.mail').click(function (event){
               if(!over) {
                   window.location = $(this).get(0).getAttribute('data-location');
               }
            });
            $('.check').click(function (event){
                if(selecting){
                    selecting = false;
                    quelquesun = false;
                    selectorcheckup(false);

                    mailselect_all(selecting);
                }else{
                    selecting = true;
                    if(quelquesun){
                        $('.little').hide();
                    }
                    quelquesun = true;
                    selectorcheckup(false);
                    mailselect_all(selecting);
                }
            })
            $('.mail_unselected').click(function (event){
                selectorcheckup(true)
                parentelement = $(this).parent().parent().get(0);
                actionelement = $('#'+ parentelement.getAttribute('id')).children('.action').get(0);
                $('#'+ parentelement.getAttribute('id')).addClass('selected')
                $(actionelement).children('.mail_unselected').hide()
                $(actionelement).children('.mail_selected').show();
            })
            $('.mail_selected').click(function (event){
                selectorcheckup(false)
                parentelement = $(this).parent().parent().get(0);
                actionelement = $('#'+ parentelement.getAttribute('id')).children('.action').get(0);
                $('#'+ parentelement.getAttribute('id')).removeClass('selected');
                $(actionelement).children('.mail_selected').hide()
                $(actionelement).children('.mail_unselected').show();

            })

            function selectorcheckup(bool){
                if(!quelquesun && bool){
                    quelquesun = true;
                    $('.little').show();
                    $('.any').hide();
                }
                if(quelquesun && !bool){
                    if($('.selected').length == 1){
                        quelquesun = false;
                        $('.little').hide()
                        $('.any').show();
                    }
                }
                if(selecting && !bool){
                    if($('.selected').length == 1){
                        quelquesun = false;
                        $('.little').hide()
                        $('.any').show();
                        $('.all').hide();
                    }
                }
            }




            function mailselect_all(bool){
                if(bool){
                    $('.mail').addClass('selected');
                    $('.all').show();
                    $('.add_to_fav').show();
                    $('.any').hide();
                    $('.mail_selected').show();
                    $('.mail_unselected').hide();
                }else{
                    $('.mail').removeClass('selected');
                    $('.all').hide();
                    $('.add_to_fav').hide();
                    $('.any').show();
                    $('.mail_selected').hide();
                    $('.mail_unselected').show();
                }
            }

        });
    </script>



@endsection
