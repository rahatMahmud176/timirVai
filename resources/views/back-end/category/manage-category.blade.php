@extends('back-end.master')

@section('title')
    Manage Category
@endsection

@section('main_content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Categories :</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <h3 class="text-success">{{ Session::get('message') }}</h3>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Category Name </th>
                            <th>Short Description</th>
                            <th>Long Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>SL.</th>
                            <th>Category Name </th>
                            <th>Short Description</th>
                            <th>Long Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        
                        @php
                            $i =1;
                        @endphp

                    @foreach ($categories as $category)   
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>{{ $category->category_short_description}}</td>
                            <td>{{ $category->category_long_description}}</td>
                            
                                @if ($category->publication_status==1)
                                <td>  
                                    <a href="#" class="btn btn-success btn-circle btn-sm" >
                                    <i class="fas fa-check"></i>
                                     </a>
                             </td>
                                @else
                                <td> 
                                    <a href="#" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </a>    
                                </td>
                                @endif   
                            
                            <td> 
                                <a href="#" class="btn btn-danger btn-circle btn-sm" onclick="event.preventDefault();
                                            var check = confirm('Are you sure to delete this?');
                                            if(check) {
                                                document.getElementById('category_delete_form+{{$category->id}}').submit();
                                            }">  
                                <i class="fas fa-trash"></i>
                                 </a> | 
                                   <a href="{{ route('edit-category-page',['id'=>$category->id]) }}" class="btn btn-info btn-circle btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr> 

                        <form action="{{ route('delete-category') }}" method="POST" id="category_delete_form+{{$category->id}}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $category->id }}">
                        </form>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection