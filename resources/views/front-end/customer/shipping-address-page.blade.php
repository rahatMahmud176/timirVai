@extends('front-end.master')

@section('title')
    Shipping Address
@endsection

@section('main_content')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">@yield('title')</li>
            </ol>
        </div><!--/breadcrums-->

        <div class="step-one">
            <h2 class="heading"> <p><span class="text-info">Hay {{ Session::get('customerName') }}</span>, Please use Checkout to easily get access to your order history, or use Checkout as Guest</p></h2>
        </div>
        

         

        <div class="shopper-informations">
            <div class="row">
                <div class="col-sm-3">
                    <div class="shopper-info">
                         
                        
                         
                    </div>
                </div>
                <div class="col-sm-5 clearfix">
                   
                    <div class="bill-to">
                        
                        <p class="text-center">Bill To</p> 
                        <div class="form-two"> 
                            {{ Form::open(['route'=>'saveShippingAddress','method'=>'POST','name'=>'shippingAddressForm']) }}
                                <input name="customerName" type="text" value="{{ $customer->name }}">
                                <span class="text-danger">{{ $errors->has('customerName')? $errors->first('customerName'):'' }}</span>
                                <select name="districtId">
                                    <option value="">-- Distric --</option>
                                    @foreach ($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->districtName }}</option> 
                                    @endforeach 
                                </select>
                                <span class="text-danger">{{ $errors->has('districtId')? $errors->first('districtId'):'' }}</span>
                                <select name="areaId">
                                    <option value="">-- Area --</option>
                                    @foreach ($areas as $area)
                                    <option value="{{ $area->id }}">{{ $area->areaName }}</option> 
                                    @endforeach 
                                </select> 
                                <span class="text-danger">{{ $errors->has('areaId')? $errors->first('areaId'):'' }}</span>

                                <input type="text" name="phoneNumber" value="{{ $customer->phone_number }}"> 
                                <span class="text-danger">{{ $errors->has('phoneNumber')? $errors->first('phoneNumber'):'' }}</span>

                               <textarea name="description" id="" cols="15" rows="5" placeholder="Any Direction"></textarea>
                               <span class="text-danger">{{ $errors->has('description')? $errors->first('description'):'' }}</span>

                                 
                                <input type="submit"  class="btn btn-primary" style="width: 100%;" name="" value="Continue" id="">
                            {{ Form::close() }}
                        </div>
                       
                    </div>
                     
                </div>
                <div class="col-sm-4">
                    
                </div>					
            </div>
        </div> 
         
        
    </div>
</section> <!--/#cart_items-->


<script>
    document.forms['shippingAddressForm'].elements['districtId'].value='{{ $customer->distric }}'
</script>
@endsection