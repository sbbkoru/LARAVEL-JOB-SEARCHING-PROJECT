@extends('panel.layout.layout')

@section('title', $title)

@section('breadcrumb')
<li class="list-inline-item">
<a href="{{ route('panel.index') }}">Home</a> </li><span>/</span>
<li class="list-inline-item">
<a href="{{ route('panel.category.index') }}">Categories</a> </li><span>/</span>
</li><li class="list-inline-item active">{{ $title }}</li>
@endsection

@section('content')
<div class="col-lg-12">
<div class="card">
<div class="card-header">{{ $title }}</div>
<div class="card-body card-block">
<form action="{{ route('panel.category.save') }}" method="post" class="">
    @csrf
    @if ($category)
    <input type="hidden" name="id" value="{{$category->id}}">
    @endif
<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon">
        <i class="fas fa-building"></i>
        </div>
<input type="text" id="name" name="name" placeholder="Category Name" class="form-control" required value="{{$category->name}}">
</div>
</div>
<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon">
        <i class="fas fa-code"></i>
        </div>
<input type="text" id="code" name="code" placeholder="Code" class="form-control" required value="{{$category->code}}">
</div>
</div>

<div class="form-actions form-group">
<button type="submit" class="btn btn-success btn-sm">Submit</button>
</div>
</form>
</div>
</div>
</div>
@endsection
