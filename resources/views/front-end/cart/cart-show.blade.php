@extends('front-end.master')

@section('title')
    Cart Products
@endsection


@section('main_content')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description">Name/ID:</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($cart_products as $cart_product) 
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{ asset($cart_product->attributes->image) }}" width="70px" height="70px" alt=""></a>
                        </td>
                        
                        <td class="cart_description">
                            <h4><a href="">{{ $cart_product->name }}</a></h4>
                            <p>Product ID: {{ $cart_product->id }}</p> 
                        </td>
                        <td class="cart_price">
                            <p>TK. {{ $cart_product->price }}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button"> 
                                <form action="{{ route('update-cart', ['id'=>$cart_product->id]) }}" method="POST"> 
                                    @csrf
                                <input class="cart_quantity_input" type="number" name="qty" value="{{ $cart_product->quantity }}" autocomplete="off" size="2">
                                <input type="submit" class="cart_quantity_down" name="btn" value="Update"> 
                            </form>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">TK.{{ $cart_product->quantity*$cart_product->price }} </p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" style="background: red" href="{{ route('item-delete',['id'=>$cart_product->id] ) }}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
             
        </div>
        <div class="row">
            <div class="col-sm-6">
                 
            </div>
            <div class="col-sm-6">
                <div class="total_area">
                    <ul> 
                        <li>Cart Sub Total <span>TK.{{ $subtotal = Cart::getSubTotal() }}</span></li> 
                        <li>Vat (7%) <span>vat.tk:-{{ $vat=$subtotal*0 }} </span></li>
                        <li>Shipping Cost <span>TK.60</span></li>
                        <li>Total <span>TK.{{ $orderTotal=$subtotal+$vat+60 }}</span></li>
                        
                        <?php Session::put('orderTotal',$orderTotal) ?> 
                    </ul>
                   

                        <a class="btn btn-default update" href="{{ route('clear-cart') }}">Clear Cart</a>
                        @if (Session::get('customerId'))
                        <a class="btn btn-default check_out" href="{{ route('shipping-address-page') }}">Check Out</a>
                        @else
                        <a class="btn btn-default check_out" href="{{ route('register_page') }}">Check Out</a>
                        @endif
                        
                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->
@endsection