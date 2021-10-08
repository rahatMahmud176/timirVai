@extends('back-end.master')

@section('title')
    Add Brands
@endsection

@section('main_content') 

            {{ Form::open(['route'=>'band-save','method'=>'POST']) }}
            <div class="card m-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Brand Info input Here :</h6>
                </div>
                <div class="card-body">
                    <h3 class="text-success">{{ Session::get('message') }}</h3>

                    <div class="row mb-3">
                        <div class="col-md-3">
                           <label for=" ">Brand name :</label>
                        </div>
                        <div class="col-md-9">
                          <input name="brand_name" type="text" class="form-control" placeholder="brand name"  >
                            <span class="text-danger">{{ $errors->has('brand_name')?$errors->first('brand_name'):'' }}</span>
                        </div>
                      </div>

                      <div class="row mb-3 mt-2">
                        <div class="col-md-3">
                           <label for=" ">Brand Short Description :</label>
                        </div>
                        <div class="col-md-9">
                          <input name="brand_short_description" type="text" class="form-control" placeholder="brand_short_description" >
                          <span class="text-danger">{{ $errors->has('brand_short_description')?$errors->first('brand_short_description'):'' }}</span>
                        </div>
                      </div>

                      <div class="row mb-3 mt-2">
                        <div class="col-md-3">
                           <label for=" ">Brand long Description :</label>
                        </div>
                        <div class="col-md-9">
                          <textarea class="form-control" name="brand_long_description" id=" " cols="30" rows="10" placeholder="brand_long_description"></textarea>
                          <span class="text-danger">{{ $errors->has('brand_long_description')?$errors->first('brand_long_description'):'' }}</span>
                        
                        </div>
                      </div> 

                      <div class="row mb-3 mt-2">
                        <div class="col-md-3">
                           <label for="category_short_description">Publication Status :</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="publication_status" value="1" id="published">
                                <label class="form-check-label" for="published">
                                  Published
                                </label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="publication_status" value="0" id="unpublished">
                                <label class="form-check-label" for="unpublished">
                                  Unpublished
                                </label>
                              </div>
                          <span class="text-danger">{{ $errors->has('publication_status')?$errors->first('publication_status'):'' }}</span>


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