<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
{{-- for Payment Method --}}
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>




    <link href="{{ asset('/') }}front-end/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}front-end/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}front-end/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{ asset('/') }}front-end/css/price-range.css" rel="stylesheet">
    <link href="{{ asset('/') }}front-end/css/animate.css" rel="stylesheet">
	<link href="{{ asset('/') }}front-end/css/main.css" rel="stylesheet">
	<link href="{{ asset('/') }}front-end/css/responsive.css" rel="stylesheet"> 
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{ asset('/') }}front-end/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('/') }}front-end/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('/') }}front-end/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('/') }}front-end/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('/') }}front-end/images/ico/apple-touch-icon-57-precomposed.png">
    {{-- For Searchable Input --}}
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" integrity="sha512-yVvxUQV0QESBt1SyZbNJMAwyKvFTLMyXSyBHDO4BG5t7k/Lw34tyqlSDlKIrIENIzCl+RVUNjmCPG+V/GMesRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head><!--/head-->


<body>
	@include('front-end.includes.header') 
	

    @yield('main_content')
 
	
	@include('front-end.includes.footer')
	

  
    <script src="{{ asset('/') }}front-end/js/jquery.js"></script>
	<script src="{{ asset('/') }}front-end/js/bootstrap.min.js"></script>
	<script src="{{ asset('/') }}front-end/js/jquery.scrollUp.min.js"></script>
	<script src="{{ asset('/') }}front-end/js/price-range.js"></script>
    <script src="{{ asset('/') }}front-end/js/jquery.prettyPhoto.js"></script>
    <script src="{{ asset('/') }}front-end/js/main.js"></script>
    {{-- For serchAble input --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" integrity="sha512-rMGGF4wg1R73ehtnxXBt5mbUfN9JUJwbk21KMlnLZDJh7BkPmeovBuddZCENJddHYYMkCh9hPFnPmS9sspki8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


 <script type="text/javascript">
     $(".chosen").chosen() ;
 </script>   
</body>
</html>