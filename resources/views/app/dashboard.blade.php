@extends('layouts.user')

@section('user-content')
<!-- kategori -->
<div class="kategori">
    <div class="small-kontainer">
        <div class="row">
            <div class="col-3">
                <img src="{{ asset('assets/images/category-1.jpg')}}" alt="">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/images/category-2.jpg')}}" alt="">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/images/category-3.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- fitur produk -->
<div class="small-kontainer">
    <h2 class="title">Fitur Product</h2>
    <div class="row">
        <div class="col-4">
            <img src="{{ asset('assets/images/product-1.jpg')}}" alt="">
            <h4>Red Printed T-Shirt</h4>
            <p>$50.00</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="col-4">
            <img src="{{ asset('assets/images/product-2.jpg')}}" alt="">
            <h4>Red Printed T-Shirt</h4>
            <p>$50.00</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="col-4">
            <img src="{{ asset('assets/images/product-3.jpg')}}" alt="">
            <h4>Red Printed T-Shirt</h4>
            <p>$50.00</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
        </div>
        <div class="col-4">
            <img src="{{ asset('assets/images/product-4.jpg')}}" alt="">
            <h4>Red Printed T-Shirt</h4>
            <p>$50.00</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
    </div>
    <h2 class="title">Latest Product</h2>
    <div class="row">
        <div class="col-4">
            <img src="{{ asset('assets/images/product-5.jpg')}}" alt="">
            <h4>Red Printed T-Shirt</h4>
            <p>$50.00</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="col-4">
            <img src="{{ asset('assets/images/product-6.jpg')}}" alt="">
            <h4>Red Printed T-Shirt</h4>
            <p>$50.00</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="col-4">
            <img src="{{ asset('assets/images/product-7.jpg')}}" alt="">
            <h4>Red Printed T-Shirt</h4>
            <p>$50.00</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
        </div>
        <div class="col-4">
            <img src="{{ asset('assets/images/product-8.jpg')}}" alt="">
            <h4>Red Printed T-Shirt</h4>
            <p>$50.00</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="{{ asset('assets/images/product-9.jpg')}}" alt="">
            <h4>Red Printed T-Shirt</h4>
            <p>$50.00</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="col-4">
            <img src="{{ asset('assets/images/product-10.jpg')}}" alt="">
            <h4>Red Printed T-Shirt</h4>
            <p>$50.00</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="col-4">
            <img src="{{ asset('assets/images/product-11.jpg')}}" alt="">
            <h4>Red Printed T-Shirt</h4>
            <p>$50.00</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
        </div>
        <div class="col-4">
            <img src="{{ asset('assets/images/product-12.jpg')}}" alt="">
            <h4>Red Printed T-Shirt</h4>
            <p>$50.00</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
    </div>
</div>
<!-- offer -->
<div class="offer">
    <div class="small-kontainer">
        <div class="row">
            <div class="col-2">
                <img src="{{ asset('assets/images/exclusive.png')}}" class="offer-img">
            </div>
            <div class="col-2">
                <p>Exclusively Available on RedStore</p>
                <h1>Smart Band 4</h1>
                <small>The Mi Smar Band 4 features a 39.9% larger (than Mi Band 3) AMOLED color full-touch display
                with adjustable brightness, so everything is clear as can be.</small><br>
                <a href="" class="btn">Buy Now &#8594;</a>
            </div>
        </div>
    </div>
</div>
<!-- testimonial -->
<div class="testimonial">
    <div class="small-kontainer">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="{{ asset('assets/images/user-1.png')}}">
                <h3>Sean Parker</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="{{ asset('assets/images/user-2.png')}}">
                <h3>Mike Smith</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="{{ asset('assets/images/user-3.png')}}">
                <h3>Mobel Joe</h3>
            </div>
        </div>
    </div>
</div>
<!-- brands -->
<div class="brands">
    <div class="small-kontainer">
        <div class="row">
            <div class="col-5">
                <img src="{{ asset('assets/images/logo-godrej.png')}}">
            </div>
            <div class="col-5">
                <img src="{{ asset('assets/images/logo-oppo.png')}}">
            </div>
            <div class="col-5">
                <img src="{{ asset('assets/images/logo-coca-cola.png')}}">
            </div>
            <div class="col-5">
                <img src="{{ asset('assets/images/logo-paypal.png')}}">
            </div>
            <div class="col-5">
                <img src="{{ asset('assets/images/logo-philips.png')}}">
            </div>
        </div>
    </div>
</div>

@endsection