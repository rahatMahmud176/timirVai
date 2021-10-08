@extends('back-end.master')

@section('title')
    Add And Manage Area's
@endsection

@section('main_content') 

        {{ Form::open(['route'=>'saveAreaInfo','method'=>'POST']) }}
        

            <!-- Dropdown No Arrow -->
            <div class="card m-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Area's Info input Here :</h6>
                </div>
                <div class="card-body">
					<h3 class="text-success">{{ Session::get('massage') }}</h3>
                    <div class="row mb-3">
                        <div class="col-md-3">
                           <label for=" ">Area :</label>
                        </div>
                        <div class="col-md-9">
                          <input name="areaName" type="text" class="form-control" placeholder="Area Name"  >
                        <span class="text-danger">{{ $errors->has('areaName')?$errors->first('areaName'):'' }}</span>
                        </div>
                      </div> 

                      <div class="row mb-3 mt-2">
                        <div class="col-md-3">
                           <label for="">Publication Status :</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="publicationStatus" value="1" id="published">
                                <label class="form-check-label" for="published">
                                  Published
                                </label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="publicationStatus" value="0" id="unpublished">
                                <label class="form-check-label" for="unpublished">
                                  Unpublished
                                </label>
                              </div> 
                          <span class="text-danger">{{ $errors->has('publicationStatus')?$errors->first('publicationStatus'):'' }}</span> 

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



        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Area's :</h1> 
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <h3 class="text-success">{{ Session::get('msg') }}</h3>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SL.</th> 
                                    <th>Area</th>  
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>SL.</th> 
                                    <th>Area</th>  
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                
                                 @php
                                     $i = 1;
                                 @endphp
        
                                
                                   
                              @foreach ($areas as $area)
                                  
                              
                                <tr> 
                                    <td> {{ $i++ }}</td>
                                    <td>{{ $area->areaName }} </td>
                                    <td> 
                                          @if ($area->publicationStatus==1)
                                          <a href="#" class="btn btn-success btn-circle btn-sm" >
                                            <i class="fas fa-check"></i>
                                             </a>
                                          @else
                                          <a href="#" class="btn btn-warning btn-circle btn-sm">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </a> 
                                        @endif
                                        
                                         
                                        
                                         
                                    </td>
                                     
                                    
                                    <td> 
                                        <a href="{{ route('deleteArea',['id'=>$area->id]) }}" class="btn btn-danger btn-circle btn-sm">  
                                        <i class="fas fa-trash"></i> 
                                    </td>
                                </tr> 

                                @endforeach
        
                            
        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
        </div>
        
@endsection