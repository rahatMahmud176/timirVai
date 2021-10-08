@extends('front-end.master')

@section('title')
    Payment Method
@endsection

@section('main_content')


<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
		<div class="paymentCont">
						<div class="headingWrap">
								<h3 class="headingTop text-center">Select Your Payment Method</h3>	
								<p class="text-center">Created with bootsrap button and using radio button</p>
						</div>
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- bootsnipp2login -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9155049400353686"
     data-ad-slot="6460533058"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                    {{ Form::open(['route'=>'submitOrder','method'=>'POST']) }}
						<div class="paymentWrap">
							<div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
					            <label class="btn paymentMethod active">
					            	<div class="method visa"></div>
					                <input type="radio" value="cashOnDelivery" name="paymentMethod" checked> 
					            </label>
					            <label class="btn paymentMethod">
					            	<div class="method master-card"></div>
					                <input type="radio" value="sureCash"  name="paymentMethod"> 
					            </label>
					            <label class="btn paymentMethod">
				            		<div class="method amex"></div>
					                <input type="radio" value="nagad" name="paymentMethod">
					            </label>
					             <label class="btn paymentMethod">
				             		<div class="method vishwa"></div>
					                <input type="radio" value="bKash" name="paymentMethod"> 
					            </label>
					            <label class="btn paymentMethod">
				            		<div class="method ez-cash"></div>
					                <input type="radio" value="rocket" name="paymentMethod"> 
					            </label>
					         
					        </div>        
						</div>
						<div class="footerNavWrap clearfix " style="margin-bottom:20px; ">
							<div class="btn btn-success pull-left btn-fyi"><span class="glyphicon glyphicon-chevron-left"></span> CONTINUE SHOPPING</div>
							 <input class="btn btn-success pull-right btn-fyi" type="submit" value="Place Order >" name="btn" id="">
                            
                        </div>
					{{ Form::close() }}
			</div>
		
	</div>
</div>
@endsection