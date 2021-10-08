@extends('front-end.master')

@section('title')
    Shop Products
@endsection

@section('main_content')
<section id="advertisement">
    <div class="container">
        <img src="images/shop/advertisement.jpg" alt="" />
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('front-end.includes.sidebar')
            </div>
            
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2> 

                    <div class="clearfix">
                        <ul class="pagination">
                            <li class="active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">&raquo;</a></li>
                        </ul>
                    </div>
                    {{ $products->links() }}

                    @foreach ($products as $product)  
                    <div class="col-sm-4" style="height:450px">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset($product->product_image) }}" style="height: 200px;" alt="image" />
                                    <h2>Tk. {{ $product->product_price }}</h2>
                                    <p>{{ $product->product_name }}</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>Tk. {{ $product->product_price }}</h2>
                                        <p>{{ $product->product_name }}</p>
                                        <a href="{{ route('single_product_page', ['id'=>$product->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Details</a>
                                        {{ Form::open(['route'=>'add-to-cart','method'=>'POST']) }} 
                                <input name="qty" type="hidden" value="1" />
                                <input type="hidden" name="id" value="{{ $product->id }}" id="">
                                <input type="submit" name="btn" class="btn btn-default add-to-cart" value="Add to cart"> 
                                {{ Form::close() }}
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    
                    @endforeach 
                </div><!--features_items-->
                 {{ $products->links() }} 
            </div>
        </div>
    </div>
</section>
@endsection
