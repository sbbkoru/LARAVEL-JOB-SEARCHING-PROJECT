@extends('site.layout.layout');

@section('breadcrumb')
<li class="list-inline-item">
<a href="{{ route('site.index') }}">Home</a> </li><span>/</span>
</li><li class="list-inline-item"><a href="{{ route('site.search') }}">Search Job</a></li><span>/</span>
</li><li class="list-inline-item">{{ $title }}</li>
@endsection
@section('content')
<div class="container">
<div class="col-lg-12">
<div class="card" style="min-height: 350px;">
<div class="card-header">
<h4 style="font-size: 40px;">{{ $job->name }}@if ($job->remote == 1)
    <span class="btn btn-success float-right mt-1">Remote</span>
@endif</h4>

</div>
<div class="card-body">
<div class="default-tab">
<nav>
<div class="nav nav-tabs" id="nav-tab" role="tablist">
<a class="nav-item nav-link active show" style="font-size: 20px;" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
<a class="nav-item nav-link" style="font-size: 20px;" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Conditions</a>
<a class="nav-item nav-link" style="font-size: 20px;" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
</div>
</nav>
<div class="tab-content pl-3 pt-2" id="nav-tabContent">
<div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
<p style="font-size: 23px;">{{$job->text}}</p>
</div>
<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
<ul>
    <li class="mb-2" style="font-size: 23px;">{{$job->category->name}}</li>
    <li class="mb-2" style="font-size: 23px;">{{$job->experiencestart}} - {{$job->experienceend}} years</li>
    <li class="mb-2" style="font-size: 23px;">{{$job->salary}}@switch($job->currencyid)
    @case(1)
        <span>₺</span>
        @break
    @case(2)
    <span>$</span>
        @break
    @case(3)
    <span>€</span>
        @break
    @case(4)
    <span>£</span>
        @break
        @default
        <span> </span>
@endswitch</li>
@if ($job->remote == 1)
    <li class="mb-2" style="font-size: 23px;">Remote Allowed</li>
@endif
</ul>
</div>
<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
<ul>
    <li class="mb-2" style="font-size: 23px;">{{$job->company->name}}</li>
    <li class="mb-2" style="font-size: 23px;">{{$job->company->owner}}</li>
    <li class="mb-2" style="font-size: 23px;">+90{{$job->company->cellphone}}</li>
    <li class="mb-2" style="font-size: 23px;">{{$job->company->email}}</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<p>Added {{$job->created_at->diffForHumans()}}</p>
</div>
</div>

@endsection
