@extends('layouts.index')
@section('title')
{{ $category->metal_title }}
@endsection
@section('meta_keyword')
{{ $category->metal_keyword }}
@endsection
@section('meta_description')
{{ $category->metal_description }}
@endsection
@section('contentHome')
<div>
    <main class="main">
        {{-- route link --}}
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="{{url('/home')}}" rel="nofollow">Home</a>
                        <span ></span> <a href="{{url('/collections')}}" rel="nofollow">collections</a>
                        <span></span>
                    </div>
                </div>
            </div>
        {{-- route link --}}

            <section class="mt-50 mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12" >
                            <div class="">
                                {{-- <div class="totall-product">
                                    <p> We found <strong class="text-brand">{{$products->count()}}</strong> Product for
                                        <strong>{{$category->name}}</strong></p>
                                </div> --}}
                            </div>
                                <livewire:front-end.product.index :category="$category"/>
                        </div>
{{--
                        <div class="col-lg-3 ">
                            <div class="widget-category mb-30">
                                <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                                <ul class="categories">
                                    @foreach ($categorys as $cat)
                                        <li><a href="{{'/collections/'.$cat->slug}}">{{$cat->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- Fillter By Price -->
                                <div class="sidebar-widget price_range range mb-30">
                                    <div class="widget-header position-relative mb-20 pb-10">
                                        <h5 class="widget-title mb-10">Fill by price</h5>
                                        <div class="bt-1 border-color-1"></div>
                                    </div>
                                    <div class="price-filter">
                                        <div class="price-filter-inner">
                                            <div id="slider-range"></div>
                                            <div class="price_slider_amount">
                                                <div class="label-input">
                                                    <span>Range:</span><input type="text" id="amount" name="price"
                                                        placeholder="Add Your Price">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group">
                                        <div class="list-group-item mb-10 mt-10">
                                            <label class="fw-900">Color</label>
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox"
                                                    id="exampleCheckbox1" value="">
                                                <label class="form-check-label" for="exampleCheckbox1"><span>Red
                                                        (56)</span></label>
                                                <br>
                                                <input class="form-check-input" type="checkbox" name="checkbox"
                                                    id="exampleCheckbox2" value="">
                                                <label class="form-check-label" for="exampleCheckbox2"><span>Green
                                                        (78)</span></label>
                                                <br>
                                                <input class="form-check-input" type="checkbox" name="checkbox"
                                                    id="exampleCheckbox3" value="">
                                                <label class="form-check-label" for="exampleCheckbox3"><span>Blue
                                                        (54)</span></label>
                                            </div>
                                            <label class="fw-900 mt-15">Item Condition</label>
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox"
                                                    id="exampleCheckbox11" value="">
                                                <label class="form-check-label" for="exampleCheckbox11"><span>New
                                                        (1506)</span></label>
                                                <br>
                                                <input class="form-check-input" type="checkbox" name="checkbox"
                                                    id="exampleCheckbox21" value="">
                                                <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished
                                                        (27)</span></label>
                                                <br>
                                                <input class="form-check-input" type="checkbox" name="checkbox"
                                                    id="exampleCheckbox31" value="">
                                                <label class="form-check-label" for="exampleCheckbox31"><span>Used
                                                        (45)</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="shop.html" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i>
                                        Fillter</a>
                                </div>
                            <!-- Product sidebar Widget -->
                            <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                                <div class="widget-header position-relative mb-20 pb-10">
                                    <h5 class="widget-title mb-10">New products</h5>
                                    <div class="bt-1 border-color-1"></div>
                                </div>
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="{{asset('assets/imgs/shop/thumbnail-3.jpg')}}" alt="#">
                                    </div>
                                    <div class="content pt-10">
                                        <h5><a href="product-details.html">Chen Cardigan</a></h5>
                                        <p class="price mb-0 mt-5">$99.50</p>
                                        <div class="product-rate">
                                            <div class="product-rating" style="width:90%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="{{asset('assets/imgs/shop/thumbnail-4.jpg')}}" alt="#">
                                    </div>
                                    <div class="content pt-10">
                                        <h6><a href="product-details.html">Chen Sweater</a></h6>
                                        <p class="price mb-0 mt-5">$89.50</p>
                                        <div class="product-rate">
                                            <div class="product-rating" style="width:80%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="{{asset('assets/imgs/shop/thumbnail-5.jpg')}}" alt="#">
                                    </div>
                                    <div class="content pt-10">
                                        <h6><a href="product-details.html">Colorful Jacket</a></h6>
                                        <p class="price mb-0 mt-5">$25</p>
                                        <div class="product-rate">
                                            <div class="product-rating" style="width:60%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-img wow fadeIn mb-45 animated d-lg-block d-none">
                                <img src="{{asset('assets/imgs/banner/banner-11.jpg')}}" alt="">
                                <div class="banner-text">
                                    <span>Women Zone</span>
                                    <h4>Save 17% on <br>Office Dress</h4>
                                    <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                                </div>
                            </div>
                        </div> --}}




                    </div>
                </div>
            </section>

        </main>
    </div>



@endsection
