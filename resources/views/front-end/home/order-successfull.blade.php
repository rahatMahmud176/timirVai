@extends('front-end.master')

@section('title')
    Order Successfull
@endsection

@section('main_content')
    <h1 class="text-success">Hi,{{ Session::get('customerName') }} your Order is Successfull</h1>
@endsection