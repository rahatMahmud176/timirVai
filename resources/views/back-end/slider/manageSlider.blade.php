
@extends('back-end.master')

@section('title')
    Manage Sliders
@endsection

@section('main_content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Sliders :</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <h3 class="text-success">{{ Session::get('message') }}</h3>
        <h3 class="text-danger">{{ Session::get('massage') }}</h3>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Slider Image: </th>
                            <th>Slider Header</th>
                            <th>Slider Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>SL.</th>
                            <th>Slider Image: </th>
                            <th>Slider Header</th>
                            <th>Slider Type</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        
                        @php
                            $i =1;
                        @endphp

                    @foreach ($sliders as $slider)   
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td> <img src="{{ asset($slider->sliderImage) }}" width="60px" alt="photo"> </td> 
                            <td>{{ $slider->sliderHeader }}</td>
                                @if ($slider->sliderType==1)
                                <td>  
                                    <a href="#" class="btn btn-success btn-circle btn-sm" >
                                    <i class="fas fa-check"></i> 
                                     </a> First Slider
                             </td>
                                @else
                                <td> 
                                    <a href="{{ route('makeFirstSlider',['id'=>$slider->id]) }}" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </a> Make First Slider
                                </td>
                                @endif   
                            
                            <td> 
                                <a href="{{ route('sliderDelete',['id'=>$slider->id]) }}" class="btn btn-danger btn-circle btn-sm">  
                                <i class="fas fa-trash"></i>
                                 </a>  
                                    
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