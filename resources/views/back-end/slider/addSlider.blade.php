@extends('back-end.master')

@section('title')
    Add Sliders
@endsection

@section('main_content') 

        {{ Form::open(['route'=>'saveSlider','method'=>'POST','enctype'=>'multipart/form-data']) }}
        

            <!-- Dropdown No Arrow -->
            <div class="card m-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Slider Info input Here :</h6>
                </div>
                <div class="card-body">
					<h3 class="text-success">{{ Session::get('message') }}</h3>
					<h3 class="text-danger">{{ Session::get('massage') }}</h3>
                    <div class="row mb-3">
                        <div class="col-md-3">
                           <label for=" ">Slider Header :</label>
                        </div>
                        <div class="col-md-9">
                          <input name="sliderHeader" type="text" class="form-control" placeholder="slider Header"  >
                        <span class="text-danger">{{ $errors->has('sliderHeader')?$errors->first('sliderHeader'):'' }}</span>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-md-3">
                           <label for=" ">Slider Title :</label>
                        </div>
                        <div class="col-md-9">
                          <input name="sliderTitle" type="text" placeholder="Slider Title" class="form-control">
                          <span class="text-danger">{{ $errors->has('sliderTitle')?$errors->first('sliderTitle'):'' }}</span> 
                        </div>
                      </div>

                      <div class="row mb-3 mt-2">
                        <div class="col-md-3">
                           <label for=" "> Slider Short Description :</label>
                        </div>
                        <div class="col-md-9">
                            <textarea name="short_description" type="text" class="form-control" placeholder="short_description"  cols="30" rows="5"></textarea>
                           
                          <span class="text-danger">{{ $errors->has('short_description')?$errors->first('short_description'):'' }}</span> 
                        
                        </div>
                      </div>

                      <div class="row mb-3 mt-2">
                        <div class="col-md-3">
                           <label for=" "> Slider Button Text:</label>
                        </div>
                        <div class="col-md-9">
                           
                        <input type="text" class="form-control" name="buttonText" placeholder="buttonText">
                          <span class="text-danger">{{ $errors->has('buttonText')?$errors->first('buttonText'):'' }}</span> 
                       
                        </div>
                      </div> 
                      <div class="row mb-3 mt-2">
                        <div class="col-md-3">
                           <label for=" "> Slider Image:</label>
                        </div>
                        <div class="col-md-9">
                           
                        <input type="file" class="form-control" name="sliderImage" placeholder="sliderImage">
                          <span class="text-danger">{{ $errors->has('sliderImage')?$errors->first('sliderImage'):'' }}</span> 
                       
                        </div>
                      </div> 

                      
                    <div class="row mb-3 mt-2">
                        <div class="col-md-3">
                           
                        </div>
                        <div class="col-md-9 ">
                            <input type="submit" class="btn btn-info btn-icon-split px-5 p-3" value="Submit"> 
                        </div>
                      </div>  
                </div>
            </div> 
        {{ Form::close() }}
        
@endsection