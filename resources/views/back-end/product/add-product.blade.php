@extends('back-end.master')

@section('title')
    Add Product
@endsection

@section('main_content') 

        {{ Form::open(['route'=>'add_product_info','method'=>'POST','enctype'=>'multipart/form-data']) }}
         

            <!-- Dropdown No Arrow -->
            <div class="card m-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Product Info input Here :</h6>
                </div> 
                <div class="card-body">
					<h3 class="text-success">{{ Session::get('message') }}</h3>
                    <div class="row mb-3">
                        <div class="col-md-3">
                           <label for=" ">Product name :</label>
                        </div>
                        <div class="col-md-9">
                          <input name="product_name" type="text" class="form-control" placeholder="Product Name"  >
                        <span class="text-danger">{{ $errors->has('product_name')?$errors->first('product_name'):'' }}</span>
                        </div>
                      </div>

                      <div class="row mb-3 mt-4">
                        <div class="col-md-3">
                           <label for=" "> product Image :</label>
                        </div>
                        <div class="col-md-9">
                          <input name="product_image" type="file" class="form-control" >
                        <span class="text-danger">{{ $errors->has('product_image')?$errors->first('product_image'):'' }}</span>

                        </div>
                      </div> 
                      
                      <div class="row mb-3 mt-4">
                        <div class="col-md-3">
                           <label for=" "> product Category :</label>
                        </div>
                        <div class="col-md-9">
                          <select name="category_id" class="form-control chosen" id="">
                            @foreach ($categories as $category)
                               <option value="{{ $category->id }}">{{ $category->category_name }}</option> 
                            @endforeach 

                          </select>
                        </div>
                        <span class="text-danger">{{ $errors->has('category_id')?$errors->first('category_id'):'' }}</span>

                      </div>

                      <div class="row mb-3 mt-4">
                        <div class="col-md-3">
                           <label for=" "> product Brand :</label>
                        </div>
                        <div class="col-md-9">
                          <select name="brand_id" class="form-control chosen" id="">
                              @foreach ($brands as $brand)
                              <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option> 
                        <span class="text-danger">{{ $errors->has('brand_id')?$errors->first('brand_id'):'' }}</span>

                              @endforeach 

                          </select>
                        </div>
                      </div>

                      
                      <div class="row mb-3 mt-4">
                        <div class="col-md-3">
                           <label for=" "> product Size :</label>
                        </div>
                        <div class="col-md-9 border border-1 ">

                          @foreach ($sizes as $size) 
                          
                            <div class="form-check">
                                <input name="size_id[]" class="form-check-input" type="checkbox" value="{{ $size->id }}" >
                                <label class="form-check-label" for="">
                                {{ $size->name }}
                                </label>
                            </div>
                          @endforeach

                             

                        </div>
                      </div>   

                     

                       <div class="row mb-3 mt-4">
                        <div class="col-md-3">
                           <label for=" "> product Color :</label>
                        </div>
                        <div class="col-md-9 border border-1 ">

                          @foreach ($colors as $color) 
                          
                            <div class="form-check">
                                <input name="color_id[]" class="form-check-input" type="checkbox" value="{{ $color->id }}">
                                <label class="form-check-label" for="">
                                {{ $color->color_name }}
                                </label>
                            </div>
                          @endforeach
                             
                        </div>
                      </div>

                      <div class="row mb-3 mt-4">
                        <div class="col-md-3">
                           <label for=" ">Product Short Description :</label>
                        </div>
                        <div class="col-md-9">
                          <input name="short_description" type="text" class="form-control" placeholder="short_description" >
                          <span class="text-danger">{{ $errors->has('short_description')?$errors->first('short_description'):'' }}</span>
                        
                        </div>
                      </div>

                      <div class="row mb-3 mt-4">
                        <div class="col-md-3">
                           <label for=" ">product long Description :</label>
                        </div>
                        <div class="col-md-9">
                          <textarea class="form-control" name="long_description" id="editor" cols="30" rows="10" placeholder=" "></textarea>
                          <span class="text-danger">{{ $errors->has('long_description')?$errors->first('long_description'):'' }}</span>
                       
                        </div>
                      </div> 

                      <div class="row mb-3 mt-4">
                        <div class="col-md-3">
                           <label for=" ">product price :</label>
                        </div>
                        <div class="col-md-9">
                            <input name="product_price" type="number" class="form-control" placeholder="" >
                          <span class="text-danger">{{ $errors->has('product_price')?$errors->first('product_price'):'' }}</span>

                        </div>
                      </div> 

                      <div class="row mb-3 mt-4">
                        <div class="col-md-3">
                           <label for=" ">product Quantity :</label>
                        </div>
                        <div class="col-md-9">
                            <input name="product_qty" type="number" class="form-control" placeholder="" >
                          <span class="text-danger">{{ $errors->has('product_qty')?$errors->first('product_qty'):'' }}</span>

                        </div>
                      </div> 


                      <div class="row mb-3 mt-4">
                        <div class="col-md-3">
                           <label for="">Publication Status :</label>
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
                    <div class="row mb-3 mt-4">
                        <div class="col-md-3">
                           
                        </div>
                        <div class="col-md-9 ">
                            <input type="submit" class="btn btn-info btn-icon-split px-5 p-3" value="Submit"> 
                        </div>
                      </div> 
                </div>
            </div>
      {{ Form::close() }}






            <script>
                initSample();
            </script>
        
@endsection