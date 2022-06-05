<!DOCTYPE html>
<html>
<head>
    <title>Arabal.com</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
    <script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
    <!--Custom-Theme-files-->
    <!--theme-style-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!--start-menu-->
    <script src="{{asset('js/simpleCart.min.js')}}"></script>
    <link href="{{asset('css/memenu.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="{{asset('js/memenu.js')}}"></script>
    <script>$(document).ready(function () {
            $(".memenu").memenu();
        });</script>
    <!--dropdown-->
    <script src="{{asset('js/jquery.easydropdown.js')}}"></script>
</head>
<body>

<div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-6 top-header-left">
                <div class="drop">
                    @auth
                        <div class="box">
                            <a href="" style="color: white">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                        </div>
                        <div class="box">
                            <a onclick="event.preventDefault();document.getElementById('logout-form').submit()"
                               href="{{route('logout')}}">Çıkış Yap</a>
                            <form action="{{route('logout')}}" method="post" id="logout-form">
                                {{csrf_field()}}
                            </form>

                        </div>
                    @endauth
                    @guest{{-- sadece ziyaretçiler için gözükür --}}

                    <div class="box">
                        <a href="{{url('/login')}}" style="color: white">Giriş Yap</a>
                    </div>
                    <div class="box1">
                        <a href="{{url('/register')}}" style="color: white">Kayıt Ol</a>
                    </div>
                    @endguest
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 top-header-left">
                <div class="cart box_1">
                    <a href="{{route('basket.index')}}">
                        <div class="total">
                            <span style="font-size: 13px">{{\App\Helper\sepetHelper::totalPrice()}} $</span></div>
                        <img src="{{asset('images/cart-1.png')}}" alt=""/>
                    </a>
                    <p><a href="{{route('basket.flush')}}" class="simpleCart_empty">Sepeti Boşalt</a></p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="logo">
    <a href="{{route('index')}}"><h1>ARABAL.com</h1></a>
</div>

<div class="header-bottom">
    <div class="container">
        <div class="header">
            <div class="col-md-9 header-left">
                <div class="top-nav">
                    <ul class="memenu skyblue">
                        <li class="active"><a href="{{route('index')}}">Anasayfa</a></li>
                        @foreach(\App\Models\Kategoriler::all() as $key=>$value)
                            <li class="grid"><a href="{{route('cat',['selflink'=>$value['selflink']])}}">{{$value['name']}}</a>
                            </li>
                        @endforeach


                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-3 header-right">
                <div class="search-bar">
                    <form action="{{route('search')}}">
                        <input type="text" name="q" value="Search" onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = 'Search';}">
                        <input type="submit" value="">
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

@yield('content')

<div class="information">
    <div class="container">
        <div class="infor-top">
            <div class="col-md-4 infor-left">
                <h3>Bizi Takip Edin</h3>
                <ul>
                    <li><a href="https://tr-tr.facebook.com/login/?next=https%3A%2F%2Ftr-tr.facebook.com%2Fapple%2F" target="_blank"><span class="fb"></span><h6>Facebook</h6></a></li>
                    <li><a href="https://twitter.com/apple" target="_blank"><span class="twit"></span><h6>Twitter</h6></a></li>
                    <li><a href="mailto:busraacaner6672@gmail.com"><span class="google"></span><h6>Google+</h6></a></li>
                </ul>
            </div>

            <div class="col-md-4 infor-left">
                <h3>Kurumsal</h3>
                <ul>
                    <li><a href="{{route('login')}}"><p>Hesabım</p></a></li>
                    <li><a href=""><p>Hakkımızda</p></a></li>
                    <li><a href="#"><p>KVKK</p></a></li>
                    <li><a href="#"><p>İş Ortaklarımız</p></a></li>
                    <li><a href="#"><p>Vizyon & Misyon</p></a></li>
                </ul>
            </div>
            <div class="col-md-4 infor-left">
                <h3>Popüler Markalar</h3>
                <ul>
                    <li><a href="https://www.mercedes-benz.com.tr/" target="_blank"><p>MERCEDES</p></a></li>
                    <li><a href="https://www.bmw.com.tr//" target="_blank"><p>BMW</p></a></li>
                    <li><a href="#" target="_blank"><p>VOLVO</p></a></li>
                    <li><a href="#" target="_blank"><p>AUDI</p></a></li>
                    <li><a href="#" target="_blank"><p>VOLKSVAGEN</p></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="col-md-6 footer-left">
                <form>
                    <input type="text" value="Enter Your Email" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
            <div class="col-md-6 footer-right">
                <p>Copyright © 2022 Arabal.com, Her hakkı saklıdır. </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
</body>
</html>
