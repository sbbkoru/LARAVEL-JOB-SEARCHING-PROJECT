@extends('panel.layout.layout')

@section('title', $title)

@section('breadcrumb')
<li class="list-inline-item">
<a href="{{ route('panel.index') }}">Home</a> </li><span>/</span>
<li class="list-inline-item">
<a href="{{ route('panel.province.index') }}">Province</a> </li><span>/</span>
</li><li class="list-inline-item active">{{ $title }}</li>
@endsection

@section('content')
<div class="col-lg-12">
<div class="card">
<div class="card-header">{{ $title }}</div>
<div class="card-body card-block">
<form action="{{ route('panel.province.save') }}" method="post" class="">
    @csrf
    @if ($province)
    <input type="hidden" name="id" value="{{$province->id}}">
    @endif
<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon">
        <i class="fas fa-university"></i>
        </div>
<input type="text" id="name" name="name" placeholder="Province Name" class="form-control" required value="{{$province->name}}">
</div>
</div>
<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon">
        <i class="fas fa-code"></i>
        </div>
<input type="text" id="code" name="code" placeholder="Code" class="form-control" required value="{{$province->code}}">
</div>
</div>
<div class="form-group">
<div class="input-group">
<div class="input-group-addon">
<i class="fas fa-id-badge"></i>
</div>
<input type="text" id="licencecode" name="licencecode" placeholder="Licence Code" class="form-control" required value="{{$province->licencecode}}">
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
