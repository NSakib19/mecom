<!--MAIN SLIDE-->
<div class="wrap-main-slide">
    <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
        <div class="item-slide">
            <img src="{{asset('ui/frontend/assets/images/main-slider-1-1.jpg')}}')}}" alt="" class="img-slide">
            <div class="slide-info slide-1">
                <h2 class="f-title">Kid Smart <b>Watches</b></h2>
                <span class="subtitle">Compra todos tus productos Smart por internet.</span>
                <p class="sale-info">Only price: <span class="price">$59.99</span></p>
                <a href="#" class="btn-link">Shop Now</a>
            </div>
        </div>
        <div class="item-slide">
            <img src="{{asset('ui/frontend/assets/images/main-slider-1-2.jpg')}}')}}" alt="" class="img-slide">
            <div class="slide-info slide-2">
                <h2 class="f-title">Extra 25% Off</h2>
                <span class="f-subtitle">On online payments</span>
                <p class="discount-code">Use Code: #FA6868</p>
                <h4 class="s-title">Get Free</h4>
                <p class="s-subtitle">TRansparent Bra Straps</p>
            </div>
        </div>
        <div class="item-slide">
            <img src="{{asset('ui/frontend/assets/images/main-slider-1-3.jpg')}}" alt="" class="img-slide">
            <div class="slide-info slide-3">
                <h2 class="f-title">Great Range of <b>Exclusive Furniture Packages</b></h2>
                <span class="f-subtitle">Exclusive Furniture Packages to Suit every need.</span>
                <p class="sale-info">Stating at: <b class="price">$225.00</b></p>
                <a href="#" class="btn-link">Shop Now</a>
            </div>
        </div>
    </div>
</div>


@php
    $sliders = App\Models\Slider::orderBy('slider_title','ASC')->get();
@endphp

<div class="wrap-main-slide">
    <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
        @foreach($sliders as $slider)
        <div class="item-slide">
            <img src="{{asset($slider->slider_image)}}')}}" alt="" class="img-slide">
            <div class="slide-info slide-1">
                <a href="#" class="btn-link">Shop Now</a>
            </div>
        </div>
        @endforeach

    </div>
</div>
