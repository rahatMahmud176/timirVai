@extends('back-end.master')

@section('title')
    Edit Dropdown's
@endsection

@section('main_content') 

        {{ Form::open(['route'=>'updateDropdownInfo','method'=>'POST','name'=>'editDropdown']) }}
        

            <!-- Dropdown No Arrow -->
            <div class="card m-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Dropdown Menus Info input Here :</h6>
                </div>
                <div class="card-body">
					<h3 class="text-success">{{ Session::get('massage') }}</h3>
                    <h3 class="text-danger">{{ Session::get('deleteMassage') }}</h3>
                    <div class="row mb-3">
                        <div class="col-md-3">
                           <label for=" ">Parent Menu :</label>
                        </div>
                        <div class="col-md-9">
                            <select name="parentMenuId" id="">
                                <option value="">---- Select Parent Menu-------</option> 
                                @foreach ($menus as $menu)
                                     <option value="{{ $menu->id }}">{{ $menu->menuTitle }}</option>
                                @endforeach  
                            </select> 
                        <span class="text-danger">{{ $errors->has('parentMenuId')?$errors->first('parentMenuId'):'' }}</span>
                        </div>
                      </div> 
                       <div class="row mb-3">
                            <div class="col-md-3">
                            <label for=" ">Dropdown Title :</label>
                            </div>
                            <div class="col-md-9">
                            <input name="dropdownTitle" type="text" class="form-control" value="{{ $dropdown->dropdownTitle }}"  >
                            <input name="id" type="hidden" class="form-control" value="{{ $dropdown->id }}"  >
                            <span class="text-danger">{{ $errors->has('dropdownTitle')?$errors->first('dropdownTitle'):'' }}</span>
                            </div>
                      </div> 
                       <div class="row mb-3">
                            <div class="col-md-3">
                            <label for=" ">Dropdown Link :</label>
                            </div>
                            <div class="col-md-9">
                            <input name="dropdownLink" type="text" class="form-control" value="{{ $dropdown->dropdownLink }}"  >
                            <span class="text-danger">{{ $errors->has('dropdownLink')?$errors->first('dropdownLink'):'' }}</span>
                            </div>
                      </div> 
                       
                      <div class="row mb-3 mt-2">
                            <div class="col-md-3">
                            <label for="">Activation Status :</label>
                            </div> 
                            <div class="col-md-9">
                                <div class="form-check">
                                    <input class="form-check-input" {{ $dropdown->activationStatus==1?'checked':'' }} type="radio" name="activationStatus" value="1" id="active">
                                    <label class="form-check-label" for="active">
                                    Active
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" {{ $dropdown->activationStatus==0?'checked':'' }} type="radio" name="activationStatus" value="0" id="inactive">
                                    <label class="form-check-label" for="inactive">
                                    Inactive
                                    </label>
                                </div> 
                               <span class="text-danger">{{ $errors->has('activationStatus')?$errors->first('activationStatus'):'' }}</span> 

                            </div>
                      </div>  



                    <div class="row mb-3 mt-2">
                        <div class="col-md-3">
                           
                        </div>
                        <div class="col-md-9 ">
                            <input type="submit" class="btn btn-info btn-icon-split px-5 p-3" value="Update"> 
                        </div>
                      </div>  
                </div>
            </div> 
        {{ Form::close() }}



        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Dropdown List :</h1> 
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div> 
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SL.</th> 
                                    <th>Dropdown Title </th>  
                                    <th>Dropdown Link </th>  
                                    <th>Parent Menu </th>  
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>SL.</th> 
                                    <th>Dropdown Title </th>  
                                    <th>Dropdown Link </th>  
                                    <th>Parent Menu </th>  
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                
                                 @php
                                     $i = 1;
                                 @endphp
        
                               
                                   
                              @foreach ($dropdowns as $myDropdown)
                                  
                             
                                <tr> 
                                    <td> {{ $i++ }}</td>
                                    <td>{{ $myDropdown->dropdownTitle }} </td>
                                    <td>{{ $myDropdown->dropdownLink }} </td>
                                    <td>{{ $myDropdown->menuTitle }} </td>
                                    @if ($myDropdown->activationStatus==1)
                                        <td > 
                                            <a class="text-success" href="{{ route('inactiveDropdown',['id'=>$myDropdown->id]) }}"><u>Active</u></a>
                                          
                                        </td>
                                    @else
                                        <td > <a class="text-danger" href="{{ route('activeDropdown',['id'=>$myDropdown->id]) }} "><u>Inactive</u></a>
                                            
                                        </td> 
                                    @endif
                                   
                                     
                                    
                                    <td> 
                                        <a href="{{ route('deleteDropdown',['id'=>$myDropdown->id]) }}" class="btn btn-danger btn-circle btn-sm">  
                                        <i class="fas fa-trash"></i> </a> | 
                                        <a href="{{ route('editDropdown',['id'=>$myDropdown->id]) }}" class="btn btn-info btn-circle btn-sm">  
                                        <i class="fas fa-edit"></i> </a>
                                    </td>
                                </tr> 
                                @endforeach
                        
        
                            
        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
        </div>
        <script>
            document.forms['editDropdown'].elements['parentMenuId'].value="{{ $dropdown->parentMenuId }}";
        </script>
@endsection