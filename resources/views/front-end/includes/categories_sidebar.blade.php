@foreach ($categories as $category)  
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><a href="{{ route('categoryProduct',['id'=>$category->id]) }}">{{ $category->category_name }}</a></h4>
        </div>
    </div>
@endforeach