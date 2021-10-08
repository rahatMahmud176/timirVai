@extends('back-end.master')

@section('title')
    Manage User
@endsection

@section('main_content')
<div class="container-fluid">
  
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User's </h6>
        </div> 
        <h3 class="text-success">{{ Session::get('message') }}</h3>
        <h3 class="text-danger">{{ Session::get('delete_message') }}</h3>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Product Name </th>
                            <th>Product Image </th>
                            <th>Color</th> 
                            <th>Size</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>SL.</th>
                            <th>Product Name </th>
                            <th>Product Image </th>
                            <th>Color</th>
                            <th>Size</th> 
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        
                        @php
                            $i =1;
                        @endphp

                      
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>Demo</td>
                            <td> <img src=" " height="45px" width="45px" alt="IMage"> </td>
                            
                            
                            <td> 
                                Demo
                            </td>
                           
                           
                            

                            <td> 
                                Demo
                                
                            </td>
                            
                               
                                <td>  
                                    <a href="#" class="btn btn-success btn-circle btn-sm" >
                                    <i class="fas fa-check"></i>
                                     </a>
                             </td>
                              
                                
                            
                            <td> 
                                <a href="#" class="btn btn-danger btn-circle btn-sm"  >
                                 </a> | 
                                   <a href=" " class="btn btn-info btn-circle btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr> 

                         

 
                    </tbody>
                </table>  
            </div> 
            
        </div> 
    </div> 
</div>
@endsection