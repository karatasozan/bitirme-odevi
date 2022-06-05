@extends('layouts.app')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="{{route('index')}}">Anasayfa</a></li>
                <li class="active">{{$data[0]['name']}}</li>
            </ol>
        </div>
    </div>
</div>

@if(session("status"))
    <div class="breadcrumbs" style="margin-top: 5px;">
        <div class="container">
            <div class="breadcrumbs-main" style="padding:10px; ">
                {{session("status")}}
            </div>
        </div>
    </div>


@endif
<!--end-breadcrumbs-->
<!--start-single-->
<div class="single contact">
    <div class="container">
        <div class="single-main">
            <div class="col-md-9 single-main-left">
                <div class="sngl-top">
                    <div class="col-md-5 single-top-left">
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="{{asset(\App\Helper\mHelper::largeImage($data[0]['image']))}}">
                                    <div class="thumb-image"> <img src="{{asset(\App\Helper\mHelper::largeImage($data[0]['image']))}}" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                                </li>
                            </ul>
                        </div>
                        <!-- FlexSlider -->
                        <script src="{{asset('js/imagezoom.js')}}"></script>
                        <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
                        <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />

                        <script>
                            // Can also be used with $(document).ready()
                            $(window).load(function() {
                                $('.flexslider').flexslider({
                                    animation: "slide",
                                    controlNav: "thumbnails"
                                });
                            });
                        </script>
                    </div>
                    <div class="col-md-7 single-top-right">
                        <div class="single-para simpleCart_shelfItem">
                            <h2>{{$data[0]['name']}}</h2>
                            <div class="star-on">
                                <ul class="star-footer">
                                    <li><a href=""><i></i></a></li>
                                    <li><a href=""><i></i></a></li>
                                    <li><a href=""><i></i></a></li>
                                    <li><a href=""><i></i></a></li>
                                    <li><a href=""><i></i></a></li>
                                </ul>
                                <div class="rewiew">
                                    <a href="#"> 1 değerlendirme</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <h5 class="item_price" >{{$data[0]['fiyat']}} $</h5>
                            <p>{{$data[0]['aciklama']}}</p>

                            <ul class="tag-men">
                                <li><span>Kategori</span>
                                    <span class="phone1">:  {{\App\Models\Kategoriler::getField($data[0]['kategoriid'],"name")}}</span></li>
                                <li><span>Satıcı</span>
                                    <span class="phone1">:  {{\App\Models\satici::getField($data[0]['saticiid'],"name")}}</span></li>
                                <li><span>Marka</span>
                                    <span class="phone1">:  {{\App\Models\Marka::getField($data[0]['markaid'],"name")}}</span></li>
                            </ul>
                            <a href="{{route('basket.add',['id'=>$data[0]['id']])}}" class="add-cart item_add">SEPETE EKLE</a>

                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div>
            <div class="col-md-3 single-right">
                <div class="w_sidebar">
                    <section  class="sky-form">
                        <h4>Kategoriler</h4>
                        <div class="row1 scroll-pane">
                            <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Tüm Ürünleri Listele</label>
                            </div>
                            <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kiralık</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Satılık</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Hasarlı</label>

                            </div>
                        </div>
                    </section>
                    <section  class="sky-form">
                        <h4>Marka</h4>
                        <div class="row1 row2 scroll-pane">
                            <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>BMW</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Mercedes</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Volvo</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Renault</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Audi</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Volkwagen</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Skoda</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Opel</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>jeep</label>
                            </div>
                        </div>
                    </section>
                    <section class="sky-form">
                        <h4>Renk</h4>
                        <ul class="w_nav2">
                            <li><a class="color1" href="#"></a></li>
                            <li><a class="color2" href="#"></a></li>
                            <li><a class="color3" href="#"></a></li>
                            <li><a class="color4" href="#"></a></li>
                            <li><a class="color5" href="#"></a></li>
                            <li><a class="color6" href="#"></a></li>
                            <li><a class="color7" href="#"></a></li>
                            <li><a class="color8" href="#"></a></li>
                            <li><a class="color9" href="#"></a></li>
                            <li><a class="color10" href="#"></a></li>
                            <li><a class="color12" href="#"></a></li>
                            <li><a class="color13" href="#"></a></li>
                            <li><a class="color14" href="#"></a></li>
                            <li><a class="color15" href="#"></a></li>
                            <li><a class="color5" href="#"></a></li>
                            <li><a class="color6" href="#"></a></li>
                            <li><a class="color7" href="#"></a></li>
                            <li><a class="color8" href="#"></a></li>
                            <li><a class="color9" href="#"></a></li>
                            <li><a class="color10" href="#"></a></li>
                        </ul>
                    </section>
                    <section class="sky-form">
                        <h4>Fiyat</h4>
                        <div class="row1 row2 scroll-pane">
                            <div class="col col-4">
                                <label class="radio"><input type="radio" name="radio" checked=""><i></i>0 TL - 12500 $</label>
                                <label class="radio"><input type="radio" name="radio"><i></i>12500 $ - 20000 $</label>
                                <label class="radio"><input type="radio" name="radio"><i></i>20000 $ - 30000 $</label>
                            </div>
                            <div class="col col-4">
                                <label class="radio"><input type="radio" name="radio"><i></i>30000 $ - 35000 $</label>
                                <label class="radio"><input type="radio" name="radio"><i></i>35000 $ - 50000 $</label>
                                <label class="radio"><input type="radio" name="radio"><i></i>50000 $- 90000 $</label>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
@endsection
