@extends('site.layout.layout');

@section('breadcrumb')
<li class="list-inline-item active">
<a href="{{ route('site.index') }}">Home</a> </li><span>/</span>
<li class="list-inline-item">
<a href="">Edit Account</a> </li>
@endsection

@section('content')
<div class="col-lg-12">
<div class="card">
<div class="card-header">
 <strong>Edit</strong> Account
</div>
<div class="card-body card-block">
<form action="{{ route('site.editaccount.submit') }}" method="post" class="form-horizontal">
    @csrf
    @if ($user)
    <input type="hidden" name="id" value="{{$user->id}}">
    @endif
<div class="row form-group">
<div class="col col-md-3">
<label for="firstname" class=" form-control-label">Firstname</label>
</div>
<div class="col-12 col-md-9">
<input type="text" id="firstname" name="firstname" class="form-control" required value="{{$user->firstname}}">
<span class="help-block"></span>
</div>
</div>
<div class="row form-group">
<div class="col col-md-3">
<label for="lastname" class=" form-control-label">Lastname</label>
</div>
<div class="col-12 col-md-9">
<input type="text" id="lastname" name="lastname" class="form-control" required value="{{$user->lastname}}">
<span class="help-block"></span>
</div>
</div>
<div class="row form-group">
<div class="col col-md-3">
<label for="username" class=" form-control-label">Username</label>
</div>
<div class="col-12 col-md-9">
<input type="text" id="username" name="username" class="form-control" required value="{{$user->username}}">
<span class="help-block"></span>
</div>
</div>
<div class="row form-group">
<div class="col col-md-3">
<label for="email" class=" form-control-label">Email</label>
</div>
<div class="col-12 col-md-9">
<input type="email" id="email" name="email" class="form-control" required value="{{$user->email}}">
<span class="help-block"></span>
</div>
</div>
<div class="row form-group">
<div class="col col-md-3">
<label for="cellphone" class=" form-control-label">Cellphone</label>
</div>
<div class="col-12 col-md-9">
<input type="text" id="cellphone" name="cellphone" class="form-control" required value="{{$user->cellphone}}">
<span class="help-block"></span>
</div>
</div>
<div class="card-footer">
    <input type="submit" class="btn btn-success" value="Submit">
</div>
</form>
</div>

</div>
</div>
@endsection
