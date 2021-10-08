@extends('back-end.master')

@section('title')
    Add Color
@endsection

@section('main_content') 

        {{ Form::open(['route'=>'save-color','method'=>'POST','enctype'=>'multipart/form-data']) }}
        

            <!-- Dropdown No Arrow -->
            <div class="card m-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Color Info input Here :</h6>
                </div>
                <div class="card-body">
					<h3 class="text-success">{{ Session::get('message') }}</h3>
                    <div class="row mb-3">
                        <div class="col-md-3">
                           <label for=" ">Color name :</label>
                        </div>
                        <div class="col-md-9">
                          <input name="color_name" type="text" class="form-control" placeholder="color_name"  >
                        <span class="text-danger">{{ $errors->has('color_name')?$errors->first('color_name'):'' }}</span>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-md-3">
                           <label for=" ">Color Image :</label>
                        </div>
                        <div class="col-md-9">
                          <input name="color_image" type="file" class="form-control">
                          <span class="text-danger">{{ $errors->has('color_image')?$errors->first('color_image'):'' }}</span> 
                        </div>
                      </div>

                      <div class="row mb-3 mt-2">
                        <div class="col-md-3">
                           <label for=" "> Short Description :</label>
                        </div>
                        <div class="col-md-9">
                          <input name="short_description" type="text" class="form-control" placeholder="short_description" >
                          <span class="text-danger">{{ $errors->has('short_description')?$errors->first('short_description'):'' }}</span> 
                        
                        </div>
                      </div>

                      <div class="row mb-3 mt-2">
                        <div class="col-md-3">
                           <label for=" "> long Description :</label>
                        </div>
                        <div class="col-md-9">
                          <textarea class="form-control" name="long_description" id=" " cols="30" rows="10" placeholder="long_description"></textarea>
                          <span class="text-danger">{{ $errors->has('long_description')?$errors->first('long_description'):'' }}</span> 
                       
                        </div>
                      </div> 

                      <div class="row mb-3 mt-2">
                        <div class="col-md-3">
                           <label for="category_short_description">Publication Status :</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="publication_status" value="1" id="publication_status">
                                <label class="form-check-label" for="publication_status">
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