@extends('back-end.master')

@section('title')
    Manage ReSeller's
@endsection

@section('main_content')
<div class="container-fluid">
  
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Reseller's </h6>
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
                            <th>Phone Number</th>  
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>SL.</th>
                            <th>Product Name </th> 
                            <th>Phone Number</th>  
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        
                    
                        @php
                            $i =1;
                        @endphp
                        @foreach ($reSellers as $row)
                            
                        
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $row->reSellerName }}</td> 
                            <td> {{ $row->reSellerPhoneNumber }} </td>  
                            <td>
                                @if ($row->reSellerType==9)
                                    <a href="{{ route('approvingReSeller',['id'=>$row->id]) }}" class="btn btn-warning" >Pending </a>
                                    <a href="" class="btn btn-danger" >Remove </a>
                                @else
                                    <a href="#" class="btn btn-success" >aproved </a>
                                    <a href="#" class="btn btn-dark" >Suspend </a>
                                @endif
                                
                            </td> 
                            <td> 
                                <a href="#" class="btn btn-danger btn-circle btn-sm"  >
                                    <i class="fas fa-trash"></i>
                                </a> | 
                                   <a href=" " class="btn btn-info btn-circle btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
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