@extends('front-end.master')

@section('title')
    Home
@endsection


@section('main_content')

@include('front-end.includes.slider')

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('front-end.includes.sidebar')
            </div>
            
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Popular Products</h2>

                    @foreach ($products as $product)
                        
                    
                    <div class="col-sm-4" style="height: 450px">
                        <div class="product-image-wrapper">
                            <div class="single-products"> 
                                    <div class="productinfo text-center">
                                        <img src="{{ asset($product->product_image) }} " height="235px" alt="" />
                                        @if ($product->product_qty>= 1  )
                                            <h2>৳ {{ $product->product_price }}</h2>
                                        @else
                                            <p><span class="text-danger mt-md-2"> Out of strock</span></p>
                                        @endif 
                                        <p>{{ $product->product_name }}</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>৳ {{ $product->product_price }}</h2>
                                            <p>{{ $product->product_name }}</p>
                                            <a href="{{ route('single_product_page', ['id'=>$product->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Details</a>
                                            {{ Form::open(['route'=>'add-to-cart','method'=>'POST']) }} 
                                <input name="qty" type="hidden" value="1" />
                                <input type="hidden" name="id" value="{{ $product->id }}" id="">
                                <input type="submit" name="btn" class="btn btn-default add-to-cart" value="Add to cart"> 
                                {{ Form::close() }}
                                            {{-- <a href="{{ route('add-to-cart,['id']') }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> --}}
                                        </div>
                                    </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                </div><!--features_items-->


                
                <div class="category-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                           
                                <li class=""><a>Popular Category Products:</a></li> 
                        
                        </ul>
                    </div>
                    <div class="tab-content"> 


                   

                        @foreach ($popularCategoryProduct as $product) 
                          <div class="tab-pane fade active in" id="tshirt" >  
                            <div class="col-sm-3" style="height:315px">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{ asset($product->product_image) }}" height="160px" alt="" />
                                            <h2>৳ {{ $product->product_price }}</h2>
                                            <p>{{ $product->product_name }}</p>
                                            <a href="{{ route('add-to-cart-by-get-method',['id'=>$product->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>  
                          </div>
                        @endforeach 
                    

                        
                       {{-- <div class="tab-pane fade" id="blazers" >
                            
                        <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{ asset('/') }}front-end/images/home/gallery4.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                              
                             
                        </div> {{-- second tab --}}
                        
                        {{-- <div class="tab-pane fade" id="sunglass" >
                             
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{ asset('/') }}front-end/images/home/gallery3.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                               
                        </div> <!-- third tab--> --}}

                        
                         
                        
                         
                    </div>
                </div><!--/category-tab-->  
                
                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">New items</h2>
                    
                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            
                            <div class="item active">	

                                @foreach ($sliderBottomActiv as $product)
                                    
                                
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{ asset($product->product_image) }} " alt="" />
                                                <h2>{{ $product->product_price }} Tk.</h2>
                                                <p>{{ $product->product_name }}</p>
                                                <a href="{{ route('add-to-cart-by-get-method',['id'=>$product->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                 
                            </div>
                            <div class="item">	
                                 
                            @foreach ($sliderBottomItem as $product) 
                               
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{ asset($product->product_image) }} " alt="" />
                                                <h2>{{ $product->product_price }}</h2>
                                                <p>{{ $product->product_name }}</p>
                                                <a href="{{ route('add-to-cart-by-get-method',['id'=>$product->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            @endforeach 


                            </div>
                        </div>
                         <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                          </a>
                          <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                          </a>			
                    </div>
                </div><!--/recommended_items-->
                
            </div>
        </div>
    </div>
</section>
@endsection