@extends('layouts.app')
@section('content')

    <div class="bnr" id="home">
        <div id="top" class="callbacks_container">
            <ul class="rslides" id="slider4">
                @foreach(\App\Models\Slider::all() as $key=>$value)
                    <li>
                        <img src="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" alt=""/>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>

    <script src="{{asset('js/responsiveslides.min.js')}}"></script>
    <script>
        $(function () {

            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>


    <div class="about">
        <div class="container">
            <div class="about-top grid-1">
                <div class="col-md-4 about-left">

                    <a href=""> <img class="img-responsive" style="width:350px;height:450px " src="images/fav3.jpg" alt=""/>
                    </a>
                </div>
                <div class="col-md-4 about-left">
                    <a href="">
                        <img class="img-responsive" style="width:350px;height:450px " src="images/fav2.jpg" alt=""/>
                    </a>
                </div>
                <div class="col-md-4 about-left">
                    <a href="">
                        <img class="img-responsive" style="width:350px;height:450px " src="images/fav.jpg" alt=""/>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="product">
        <div class="container">
            <div class="product-top">
                @foreach(\App\Models\Arabalar::all()->chunk(4) as $chunk) {{-- tum araba sectık ve chunk ile 4'lu gruplara ayırdık--}}
                <div class="product-one">
                    @foreach($chunk as $key =>$value )
                        <div class="col-md-3 product-left">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="{{route('araba.detay',['selflink'=>$value['selflink']])}}" class="mask">
                                    <img class="img-responsive zoom-img" style="width: 200px;height: 200px" src="{{asset($value['image'])}}"
                                         alt=""/>
                                </a>
                                <div class="product-bottom">
                                    <h3>{{$value['name']}}</h3>
                                    <p>{{\App\Models\satici::getField($value['saticiid'],"name")}}</p>
                                    <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">{{$value['fiyat']}}</span></h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix"></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
