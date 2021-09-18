@extends('panel.layout.layout')

@section('title', $title)

@section('breadcrumb')
<li class="list-inline-item">
<a href="{{ route('panel.index') }}">Home</a> </li><span>/</span>
<li class="list-inline-item">
<a href="{{ route('panel.company.index') }}">Companies</a> </li><span>/</span>
</li><li class="list-inline-item active">{{ $title }}</li>
@endsection

@section('content')
<div class="col-lg-12">
<div class="card">
<div class="card-header">{{ $title }}</div>
<div class="card-body card-block">
<form action="{{ route('panel.company.save') }}" method="post" class="">
    @csrf
    @if ($company)
    <input type="hidden" name="id" value="{{$company->id}}">
    @endif
<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon">
        <i class="fas fa-building"></i>
        </div>
<input type="text" id="name" name="name" placeholder="Your Company Name" class="form-control" required value="{{$company->name}}">
</div>
</div>
<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon">
            <i class="fa fa-user"></i>
        </div>
<input type="text" id="owner" name="owner" placeholder="Your Name" class="form-control" required value="{{$company->owner}}">
</div>
</div>
<div class="form-group">
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-envelope"></i>
</div>
<input type="email" id="email" name="email" placeholder="Your Email" class="form-control" required value="{{$company->email}}">
</div>
</div>
<div class="form-group">
<div class="input-group">
<div class="input-group-addon">
<i class="fas fa-phone"></i>
</div>
<input type="text" id="cellphone" name="cellphone" placeholder="Your Cellphone" class="form-control" required value="{{$company->cellphone}}">
</div>
</div>
<div class="form-check-inline form-check">
<label for="inline-radio1" class="form-check-label ">
<input type="radio"  name="status" value="{{ $company->companyStatus('a') }}" class="form-check-input" @if ($company->status == 'a')
checked
@endif>Active
</label>
<label for="inline-radio2" class="form-check-label ">
<input type="radio"  name="status" value="{{ $company->companyStatus('p')}}" class="form-check-input" @if ($company->status == 'p')
checked
@endif>Passive
</label>
</div>

<div class="form-actions form-group">
<button type="submit" class="btn btn-success btn-sm">Submit</button>
</div>
</form>
</div>
</div>
</div>
@endsection
