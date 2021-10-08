@extends('back-end.master')

@section('title')
    Show Orders
@endsection

@section('main_content')
<div class="container-fluid">

    
     

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Orders Here </h6>
        </div>
        <h3 class="text-success">{{ Session::get('message') }}</h3>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Order Id</th>
                            <th>Order Status</th>
                            <th>Order Date</th>
                            <th>Customer Name</th>
                            <th>Order Total </th> 
                            <th>Payment Method </th>  
                            <th>Payment Status </th>   
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Order Id</th>
                            <th>Order Status</th>
                            <th>Order Date</th>
                            <th>Customer Name</th>
                            <th>Order Total </th>  
                            <th>Payment Method </th>  
                            <th>Payment Status </th>  
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $i =1
                        @endphp
                        @foreach ($orders as $order)
                            
                        
                        <tr>
                            <td>LDG520{{ $i++ }}</td>
                            <td>{{ $order->orderStatus }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->name }}</td>
                            <td>TK.{{ $order->orderTolal }}</td> 
                            <td>{{ $order->paymentMethod }}</td> 
                            <td>{{ $order->paymentStatus }}</td> 
                            <td>
                                <a href="{{ route('orderDetails',['id'=>$order->id]) }}">View</a> |
                                <a href="">Edit</a>  |
                                <a href="{{ route('invoicePdf',['id'=>$order->id]) }}">Invoice Pdf</a>
                                 
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