@extends('layouts.frontend')

@section('products')
    <!-- All Product Section Begin -->
    <section class="categories">
        <div class="section-title">
            <h2>All Products Add to Cart</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach ($products as $product)
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="{{ $product->image_name }}">
                                <h5><a href="#">{{ $product->name }}</a></h5>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- All Product Section End -->
@endsection
