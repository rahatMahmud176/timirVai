
@extends('back-end.master')

@section('title')
    Manage product
@endsection

@section('main_content')
<div class="container-fluid">
   
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Products :</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>  
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
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

                    @foreach ($products as $product)   
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td> <img src="{{ asset($product->product_image) }}" height="45px" width="45px" alt="IMage"> </td>
                            
                           <?php 
                           $product_colors = explode(',',$product->color_id);
                            ?>
                            <td> 
                                @foreach($product_colors as $color)  
                                    <img src="{{ asset(\App\Models\Color::where('id',$color)->value('color_image')) }}" height="20" width="20" alt="color image">
                                 @endforeach 
                            </td>
                           
                           
                            <?php $product_sizes = explode(',',$product->size_id) ?>

                            <td> 
                                @foreach ($product_sizes as $size) 
                                    {{ App\Models\Size::where('id',$size)->value('name') }}
                                @endforeach
                                
                            </td>
                            
                                @if ($product->publication_status==1)
                                <td>  
                                    <a href="#" class="btn btn-success btn-circle btn-sm" >
                                    <i class="fas fa-check"></i>
                                     </a>
                             </td>
                                @else
                                <td>  
                                    <a href="#" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </a>    
                                </td>
                                @endif   
                            
                            <td> 
                                <a href="#" class="btn btn-danger btn-circle btn-sm" onclick="event.preventDefault();
                                            var check = confirm('Are you sure to delete this?');
                                            if(check) {
                                                document.getElementById('product_delete_form+{{$product->id}}').submit();
                                            }">  
                                <i class="fas fa-trash"></i>
                                 </a> | 
                                   <a href="{{ route('edit-product-page',['id'=>$product->id]) }}" class="btn btn-info btn-circle btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr> 

                        <form action="{{ route('delete-product') }}" method="POST" id="product_delete_form+{{$product->id}}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                        </form>

                    @endforeach 
                    </tbody>
                </table>  
            </div> 
            
        </div> 
    </div> 
</div>


 
@endsection