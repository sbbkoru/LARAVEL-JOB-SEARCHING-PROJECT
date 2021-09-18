@extends('site.layout.layout');

@section('breadcrumb')
<li class="list-inline-item active">
<a href="{{ route('site.index') }}">Home</a> </li><span>/</span>
<li class="list-inline-item">
<a href="">Search Jobs</a> </li>
@endsection

@section('content')
            <section class="welcome p-t-10">
                <div class="container">
                <h1>Search Jobs</h1>
                <br>

                <div class="card">
<div class="card-header">
<strong>Search</strong> A Job
</div>
<div class="card-body card-block">
<form action="{{ route('site.searchsubmit')}}" method="post" id="j-search-form">
    @csrf
<div class="row form-group">
<div class="col col-md-3">
<label for="location_id" class=" form-control-label">Location</label>
</div>
<div class="col-12 col-md-9">
<select name="location_id" id="location_id" class="form-control" required>
<option value="0">Lütfen Seçiniz</option>
@foreach ($location_ as $location)
<option value="{{$location->id}}" >{{ $res_[$location->id] }}</option>
@endforeach
</select>
</div>
</div>
<div class="row form-group">
<div class="col col-md-3">
<label for="category_id" class=" form-control-label">Category</label>
</div>
<div class="col-12 col-md-9">
<select name="category_id" id="category_id" class="form-control" required>
<option value="0">Lütfen Seçiniz</option>
@foreach ($category_ as $category)
<option value="{{$category->id}}" >{{ $category->name }}</option>
@endforeach
</select>
</div>
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary btn-ml">
<i class="fas fa-search"></i> Search Job
</button>
</div>


</form>
</div>

</div>
<div id="j-search-response">

</div>
                </div>
            </section>

@endsection

@section('custom_js')
<script>

const $searchForm = $('#j-search-form');

$searchForm.submit(function (){
    $searchForm.ajaxSubmit({
        success : function(responsetext){
            $('#j-search-response').html(responsetext);
        }
    });
    return false;
})


</script>
@endsection
