@extends('reSeller.master')

@section('title')
    Dashbord
@endsection

@section('mainContent')
<div class="container-fluid"> 
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Products</h6>
        </div>
        <h3 class="text-success">{{ Session::get('message') }}</h3>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Image</th>
                            <th>HollSell Price </th>
                            <th>Retale Price</th>
                            <th>Color</th>
                            <th>Strock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                     
                    <tbody>
                        
                        @php
                            $i =1;
                        @endphp

                    @foreach ($products as $row)
                    <tr> 
                        <td> #LD5020{{ $row->id }}</td>
                        <td> <img src="{{ asset($row->product_image) }}" height="45px" width="45px" alt="IMage">  </td>
                        <td>450 TK.</td>
                        <td> {{ $row->product_price }} TK.</td>
                        
                        <?php 
                        $product_colors = explode(',',$row->color_id);
                         ?>
                            <td>
                            @foreach($product_colors as $color)  
                                <img src="{{ asset(\App\Models\Color::where('id',$color)->value('color_image')) }}" height="20" width="25" alt="color image">
                             @endforeach 
                            </td>
                            
                            <td>{{ $row->product_qty }} (Pcs)</td>
                    
                        
                        <td> 
                            <a href="#" class="btn btn-danger btn-circle btn-sm" >  
                            <i class="fas fa-trash"></i>
                             </a> | 
                               <a href=" " class="btn btn-info btn-circle btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                    </tr> 

                    @endforeach
                        
                        <form action=" ">
                            
                            <input type="hidden" name="id" value=" ">
                        </form>
 

                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>
@endsection