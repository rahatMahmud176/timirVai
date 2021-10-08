<div class="left-sidebar">
    <h2>Category</h2>
    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
         
         
        
        {{-- <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                        Womens
                    </a>
                </h4>
            </div>
            <div id="womens" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul>
                        <li><a href="#">Fendi</a></li>
                        <li><a href="#">Guess</a></li>
                        <li><a href="#">Valentino</a></li>
                        <li><a href="#">Dior</a></li>
                        <li><a href="#">Versace</a></li>
                    </ul>
                </div>
            </div>
        </div> --}}
        @include('front-end.includes.categories_sidebar')
         
         
        
         
         
         
    </div><!--/category-products-->

    <div class="brands_products"><!--brands_products-->
        <h2>Brands </h2>
        <div class="brands-name">
            <ul class="nav nav-pills nav-stacked">
                @foreach ($brands as $brand) 
                <li><a href="{{ route('brandProducts',['id'=>$brand->id]) }}"> <span class="pull-right"></span>{{ $brand->brand_name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div><!--/brands_products-->
    
    <div class="price-range"><!--price-range-->
        <h2>Price Range</h2>
        <div class="well text-center">
             <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
             <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
        </div>
    </div><!--/price-range-->
    
    <div class="shipping text-center"><!--shipping-->
        <img src="{{ asset('/') }}front-end/images/home/shipping.jpg" alt="" />
    </div><!--/shipping-->

</div>