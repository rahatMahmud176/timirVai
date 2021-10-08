@extends('back-end.master')

@section('title')
    Edit Menu
@endsection

@section('main_content') 

        {{ Form::open(['route'=>'updateMenuInfo','method'=>'POST']) }}
        

            <!-- Dropdown No Arrow -->
            <div class="card m-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Menus Info input Here :</h6>
                </div>
                <div class="card-body">
					<h3 class="text-success">{{ Session::get('massage') }}</h3>
                    <h3 class="text-danger">{{ Session::get('deleteMassage') }}</h3>
                    <div class="row mb-3">
                        <div class="col-md-3">
                           <label for=" ">Menu Title :</label>
                        </div>
                        <div class="col-md-9">
                          <input name="menuTitle" type="text" class="form-control" value="{{ $editableMenu->menuTitle }}"  >
                          <input name="id" type="hidden" class="form-control" value="{{ $editableMenu->id }}"  >
                        <span class="text-danger">{{ $errors->has('menuTitle')?$errors->first('menuTitle'):'' }}</span>
                        </div>
                      </div> 
                       <div class="row mb-3">
                        <div class="col-md-3">
                           <label for=" ">Menu Link :</label>
                        </div>
                        <div class="col-md-9">
                          <input name="menuLink" type="text" class="form-control" value="{{ $editableMenu->menuLink }}"  >
                        <span class="text-danger">{{ $errors->has('menuLink')?$errors->first('menuLink'):'' }}</span>
                        </div>
                      </div> 
                      
                      <div class="row mb-3 mt-2">
                            <div class="col-md-3">
                            <label for="">Dropdownable Status :</label>
                            </div> 
                            <div class="col-md-9">
                                <div class="form-check">
                                    <input class="form-check-input" {{ $editableMenu->dropdownableStatus==1?'checked':'' }} type="radio" name="dropdownableStatus" value="1" id="published">
                                    <label class="form-check-label" for="published">
                                        Dropdownable
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" {{ $editableMenu->dropdownableStatus==0?'checked':'' }} type="radio" name="dropdownableStatus" value="0" id="unpublished">
                                    <label class="form-check-label" for="unpublished">
                                        Not Dropdownable
                                    </label>
                                </div> 
                               <span class="text-danger">{{ $errors->has('dropdownableStatus')?$errors->first('dropdownableStatus'):'' }}</span> 

                            </div>
                      </div>
                      
                      <div class="row mb-3 mt-2">
                            <div class="col-md-3">
                            <label for="">Activation Status :</label>
                            </div> 
                            <div class="col-md-9">
                                <div class="form-check">
                                    <input class="form-check-input" {{ $editableMenu->activationStatus==1?'checked':'' }} type="radio" name="activationStatus" value="1" id="active">
                                    <label class="form-check-label" for="active">
                                    Active
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" {{ $editableMenu->activationStatus==0?'checked':'' }} type="radio" name="activationStatus" value="0" id="inactive">
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
                            <input type="submit" class="btn btn-info btn-icon-split px-5 p-3" value="Submit"> 
                        </div>
                      </div>  
                </div>
            </div> 
        {{ Form::close() }}



        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Menu List :</h1> 
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
                                    <th>Menu Title </th>  
                                    <th>Menu Link </th>  
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>SL.</th> 
                                    <th>Menu Title </th>  
                                    <th>Menu Link </th>  
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                
                                 @php
                                     $i = 1;
                                 @endphp
        
                               
                                   
                              @foreach ($menus as $menu)
                                  
                             
                                <tr> 
                                    <td> {{ $i++ }}</td>
                                    <td>{{ $menu->menuTitle }} </td>
                                    <td>{{ $menu->menuLink }} </td>
                                    @if ($menu->activationStatus==1)
                                        <td > 
                                            <a class="text-success" href="{{ route('inactiveMenu',['id'=>$menu->id]) }}"><u>Active</u></a> |
                                            @if ($menu->dropdownableStatus==1)
                                                <a class="text-success" href="{{ route('nonDropdownMenu',['id'=>$menu->id]) }}"><u>Dropdownable</u></a>
                                            @else
                                                <a class="text-danger" href="{{ route('dropdownableMenu',['id'=>$menu->id]) }}"><u>Not Dropdownable</u></a>
                                            @endif
                                        </td>
                                    @else
                                        <td > <a class="text-danger" href="{{ route('activeMenu',['id'=>$menu->id]) }}"><u>Inactive</u></a> | 
                                            @if ($menu->dropdownableStatus==1)
                                                <a class="text-success" href="{{ route('nonDropdownMenu',['id'=>$menu->id]) }}"><u>Dropdownable</u></a>
                                            @else
                                                <a class="text-danger" href="{{ route('dropdownableMenu',['id'=>$menu->id]) }}"><u>Not Dropdownable</u></a>
                                            @endif
                                        </td> 
                                    @endif
                                   
                                     
                                    
                                    <td> 
                                        <a href="{{ route('deleteMenu',['id'=>$menu->id]) }}" class="btn btn-danger btn-circle btn-sm">  
                                        <i class="fas fa-trash"></i> </a> | 
                                        <a href="{{ route('editMenuPage',['id'=>$menu->id]) }}" class="btn btn-info btn-circle btn-sm">  
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
        
@endsection