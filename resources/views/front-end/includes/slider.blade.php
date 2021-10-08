<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>
                    
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>{{ $firstSlider->sliderHeader }}</h1>
                                <h2>{{ $firstSlider->sliderTitle }}</h2>
                                <p>{{ $firstSlider->short_description }} </p>
                                <button type="button" class="btn btn-default get">{{ $firstSlider->buttonText }}</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ asset($firstSlider->sliderImage) }} " style="height:400px;" class="girl img-responsive" alt="" /> 
                            </div>
                        </div>
                         
                        @foreach ($sliders as $slider)
                            
                        
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>{{ $slider->sliderHeader }}</h1>
                                <h2>{{ $slider->sliderTitle }}</h2>
                                <p>{{ $slider->short_description }} </p>
                                <button type="button" class="btn btn-default get">{{ $slider->buttonText }}</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ asset($slider->sliderImage) }} " style="height:400px;" class="girl img-responsive" alt="" /> 
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                    
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</section><!--/slider-->