@extends('panel.layout.layout')

@section('title', $title)

@section('breadcrumb')
<li class="list-inline-item">
<a href="{{ route('panel.index') }}">Home</a> </li><span>/</span>
<li class="list-inline-item">
<a href="{{ route('panel.job.index') }}">Job</a> </li><span>/</span>
</li><li class="list-inline-item active">{{ $title }}</li>
@endsection

@section('content')
<div class="col-lg-12">
<div class="card">
<div class="card-header">{{ $title }}</div>
<div class="card-body card-block">
<form action="{{ route('panel.job.save') }}" method="post" class="">
    @csrf
    @if ($job)
    <input type="hidden" name="id" value="{{$job->id}}">
    @endif
    <div class="row form-group">
<div class="col col-md-3">
<label for="company_id" class=" form-control-label">Company</label>
</div>
<div class="col-12 col-md-9">
<select name="company_id" id="company_id" class="form-control" required>
<option value="0">Lütfen Seçiniz</option>
@foreach ($company_ as $company)
<option @if (request()->input('company_id') == $company->id)
selected
@endif value="{{$company->id}}" >{{ $company->name }}</option>
@endforeach
</select>
</div>
</div>
<div class="row form-group">
<div class="col col-md-3">
<label for="location_id" class=" form-control-label">Location</label>
</div>
<div class="col-12 col-md-9">
<select name="location_id" id="location_id" class="form-control" required>
<option value="0">Lütfen Seçiniz</option>
@foreach ($location_ as $location)
<option @if (request()->input('location_id') == $location->id)
selected
@endif value="{{$location->id}}" >{{ $res_[$location->id] }}</option>
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
<option @if (request()->input('category_id') == $category->id)
selected
@endif value="{{$category->id}}" >{{ $category->name }}</option>
@endforeach
</select>
</div>
</div>
<div class="form-group">
<div class="input-group">
<div class="input-group-addon">
<i class="fas fa-suitcase"></i>
</div>
<input type="text" id="name" name="name" placeholder="Job Name" class="form-control" value="{{$job->name}}">
</div>
</div>
<div class="form-group">
<div class="input-group">
<div class="input-group-addon">
<i class="fas fa-envelope"></i>
</div>
<input type="text" id="text" name="text" placeholder="Text About Job" class="form-control" value="{{$job->text}}">
</div>
</div>
<div class="row form-group">
    <p style="margin-left: 20px;">Experience Gap</p>
<div class="col col-md-4">
<input type="text" name="experiencestart" placeholder="Start" class="form-control" value="{{$job->experiencestart}}">
</div>
<p>-</p>
<div class="col col-md-4">
<input type="text" name="experienceend" placeholder="End" class="form-control" value="{{$job->experienceend}}">
</div>
</div>
<div class="form-group">
<div class="input-group">
<div class="input-group-addon">
<i class="fas fa-credit-card"></i>
</div>
<input type="text" id="currencyid"  name="salary" placeholder="Estimated Salary" class="form-control" value="{{$job->salary}}">
</div>
</div>
<div class="row form-group">
<div class="col col-md-3">
<label class=" form-control-label">Currency</label>
</div>
<div class="col col-md-9">
<div class="form-check-inline form-check">
<label for="inline-radio1" class="form-check-label ">
<input type="radio"  name="currencyid" value="{{ $job->currencyID('1') }}" class="form-check-input" @if (request()->input('currencyid') == 1)
checked
@endif>₺
</label>
<label for="inline-radio2" class="form-check-label ">
<input type="radio"  name="currencyid" value="{{ $job->currencyID('2') }}" class="form-check-input" @if (request()->input('currencyid') == 2)
checked
@endif>$
</label>
<label for="inline-radio3" class="form-check-label ">
<input type="radio"  name="currencyid" value="{{ $job->currencyID('3') }}" class="form-check-input" @if (request()->input('currencyid') == 3)
checked
@endif>€
</label>
<label for="inline-radio4" class="form-check-label " @if (request()->input('currencyid') == 4)
checked
@endif>
<input type="radio"  name="currencyid" value="{{ $job->currencyID('4') }}" class="form-check-input">£
</label>
</div>
</div>
</div>
<div class="row form-group">
<div class="col col-md-3">
<label class=" form-control-label">Remote Allowed</label>
</div>
<div class="col col-md-9">
<div class="form-check-inline form-check">
<label class="form-check-label ">
<input type="radio"  name="remote" value="{{ $job->remoteID(1) }}" class="form-check-input" @if (request()->input('remote') == 1)
checked
@endif>Yes
</label>
<label for="inline-radio2" class="form-check-label " >
<input type="radio" name="remote" value="{{ $job->remoteID(0) }}" class="form-check-input" @if (request()->input('remote') == 0)
checked
@endif>No
</label>
</div>
</div>
</div>
<div class="form-actions form-group">
<button type="submit" class="btn btn-success btn-sm">
<i class="fa fa-dot-circle-o"></i> Submit
</button>
</div>
</form>
</div>
</div>
</div>
@endsection
