@extends('panel.layout.layout')

@section('title', $title)

@section('breadcrumb')
<li class="list-inline-item">
<a href="{{ route('panel.index') }}">Home</a> </li><span>/</span>
<li class="list-inline-item">
<a href="{{ route('panel.province.index') }}">Locations</a> </li><span>/</span>
</li><li class="list-inline-item active">{{ $title }}</li>
@endsection

@section('content')
<div class="col-lg-12">
<div class="card">
<div class="card-header">{{ $title }}</div>
<div class="card-body card-block">
<form action="{{ route('panel.location.save') }}" method="post" class="">
    @csrf
    @if ($location)
    <input type="hidden" name="id" value="{{$location->id}}">
    @endif
    <div class="row form-group">
<div class="col col-md-3">
<label for="select" class=" form-control-label">Province</label>
</div>
<div class="col-12 col-md-9">
<select name="province_id" id="select" class="form-control" required>
<option value="0">Lütfen Seçiniz</option>
@foreach ($province_ as $province)
<option @if (request()->input('province_id') == $province->id)
selected
@endif value="{{$province->id}}" >{{ $province->name }}</option>
@endforeach
</select>
</div>
</div>
<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon">
        <i class="fas fa-building"></i>
        </div>
<input type="text" id="name" name="name" placeholder="Location Name" class="form-control" required value="{{$location->name}}">
</div>
</div>
<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon">
            <i class="fa fa-user"></i>
        </div>
<input type="text" id="code" name="code" placeholder="Location Code" class="form-control" required value="{{$location->code}}">
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
