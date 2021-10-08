@extends('back-end.master')

@section('title')
    Orders Details
@endsection

@section('main_content')
<div class="container-fluid">

    
     

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Customer Info:</h6>
        </div>
        <h3 class="text-success">{{ Session::get('message') }}</h3>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Customer Name :</th>
                            <th>Phone Number :</th>
                            <th>Address</th>  
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>SL.</th>
                            <th>Customer Name :</th>
                            <th>Phone Number :</th>
                            <th>Address</th>  
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $i =1
                        @endphp 
                        <td>{{ $i++ }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $shiping->phoneNumber }}</td>
                        <td>{{ $shiping->districtName }},{{ $shiping->areaName }},{{ $shiping->description }}</td>
                           </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Product Info:</h6>
        </div>
        <h3 class="text-success">{{ Session::get('message') }}</h3>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Prouduct ID :</th>
                            <th>Product Name :</th>
                            <th>Product Quantity :</th>
                            <th>Product Price :</th>  
                            <th>Total Price :</th>  
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>SL.</th>
                            <th>Prouduct ID :</th>
                            <th>Product Name :</th>
                            <th>Product Quantity :</th>
                            <th>Product Price :</th> 
                            <th>Total:- {{ $order->orderTolal }}/-</th>  
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $i =1
                        @endphp 
                        @foreach ($products as $product) 
                        <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $product->productId }}</td>
                        <td>{{ $product->productName }}</td>
                        <td>{{ $product->productQuantity }}</td>
                        <td>{{ $product->productPrice }}</td>
                        <td>{{ $product->productPrice*$product->productQuantity }}</td>
                         </tr>
                          
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

</div>




@endsection