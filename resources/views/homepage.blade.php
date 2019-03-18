@extends('layouts.UI.layouts')

@section('UI.content')
    <div class="header-bottom">
        <div class="header_bottom_right_images">
            <div id="slideshow">
                <ul class="slides">
                    <li><a href="#"><canvas ></canvas><img src="{{ asset('images/banner4.jpg')}}" alt="Marsa Alam underawter close up" ></a></li>
                    <li><a href="#"><canvas></canvas><img src="{{ asset('images/banner2.jpg')}}
                                " alt="Turrimetta Beach - Dawn" ></a></li>
                    <li><a href="#"><canvas></canvas><img src="{{ asset('images/banner3.jpg')}} "alt="Power Station" ></a></li>
                    <li><a href="#"><canvas></canvas><img src="{{ asset('images/banner1.jpg')}} "alt="Colors of Nature" ></a></li>
                </ul>
                <span class="arrow previous"></span>
                <span class="arrow next"></span>
            </div>
            <div class="content-wrapper">
                <div class="content-top">
                    <div class="box_wrapper"><h1>Car</h1></div>
                    <div class="text">
                        <div class="grid_1_of_3 images_1_of_3">
                            @foreach($products as $product)
                            <div class="grid_1">
                                <a href="#"><img src="{{ asset('images/pic5.jpg')}}" title="continue reading" alt=""></a>
                                <div class="grid_desc">
                                    <p class="title">{{ $product->name }}</p>
                                    <p class="title1">{{ $product->decription }}</p>
                                    <div class="price" style="height: 19px;">
                                        <span class="reducedfrom">{{ $product->price }}</span>
                                        <span class="actual">$12.00</span>
                                    </div>
                                    <div class="cart-button">
                                        <div class="cart">
                                            <a href="#"><img src="{{ asset('images/cart.png')}}" alt=""/></a>
                                        </div>
                                        <button class="button"><span>Details</span></button>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
