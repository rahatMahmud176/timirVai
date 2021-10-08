<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title> 
    <!-- Custom fonts for this template-->
    <link href="{{ asset('/') }}back-end/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> 
        {{-- For searchAble Select input --}}
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" integrity="sha512-yVvxUQV0QESBt1SyZbNJMAwyKvFTLMyXSyBHDO4BG5t7k/Lw34tyqlSDlKIrIENIzCl+RVUNjmCPG+V/GMesRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Custom styles for this template-->
        <link href="{{ asset('/') }}back-end/css/sb-admin-2.min.css" rel="stylesheet">
        {{-- For toastr --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block border border-right-1 ">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">LOG IN!</h1>
                            </div>
                            
                                {{ Form::open(['class'=>'user','route'=>'loginInfoSubmit','method'=>'POST']) }}
                                
                                 
                                <div class="form-group">
                                    <input name="phoneNumber" type="number" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Phone Number ">
                                </div>
                                <div class="form-group">
                                    <input name="password" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Password">
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-user btn-block">LOG IN</button>
                                
                            {{ Form::close() }}
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div> 
                        </div>
                    </div>







                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                {{ Form::open(['class'=>'user','route'=>'userRegisterInfoSubmit','method'=>'POST']) }}
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="userFirstName" type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="userLastName" type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="userPhoneNumber" type="number" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Phone Number">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="password" type="text" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="rePassword" type="text" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div> 
                                <button type="submit" class="btn btn-warning btn-user btn-block">Sing UP</button>
                                <hr> 
                            {{ Form::close() }}
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('/') }}back-end/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('/') }}back-end/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('/') }}back-end/vendor/jquery-easing/jquery.easing.min.js"></script>

   
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('/') }}back-end/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('/') }}back-end/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('/') }}back-end/js/demo/chart-area-demo.js"></script>
    <script src="{{ asset('/') }}back-end/js/demo/chart-pie-demo.js"></script>
     
	{{-- For Toster --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if (Session::has('msg')) 
      <script>
         toastr.{{ Session::get('msgType') }}("{{ Session::get('msg') }}")
      </script>   
    @endif
</body>

</html>