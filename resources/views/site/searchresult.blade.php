@php
    use Illuminate\Support\Collection
@endphp
<div class="row">
@if (count($job_) > 0)
@foreach ($job_ as $job)

<div class="col-md-12 mt-2">
<div class="card" style="min-height: 300px;">
<div class="card-header">
<strong class="card-title" style="font-size: 25px;">{{ $job->name }}

@if ($job->remote == 1)
    <span class="badge badge-success float-right mt-1">Remote</span>
@endif

</strong>
</div>
<div class="card-body">
<p class="card-text" style="font-size: 17px;">{{$job->text}}
</p>
<br>
<p >Experience:  {{$job->experiencestart}}-{{$job->experienceend}} years </p>
<p><span><i class="card-title">{{ $job->company->name }}
</i></span>
<span style="margin-left: 1000px;font-size: 20px;">{{$job->salary}}  @switch($job->currencyid)
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
@endswitch</span></p>
</div>
<div class="card-header">

<div class="table-data-feature">
<strong class="card-title" style="margin-right: 50px;">{{ $job->location->name }} , {{ $job->location->province->name }}
</strong>
<a href="{{route('site.searchshow', ['job_id' => $job->id])}}" class="btn btn-primary btn-sm" style="font-size: 17px;">Browse</a>
</div>
</div>
 </div>
 </div>
@endforeach
@else
<div class="alert alert-danger" style="min-width: 1300px;" role="alert">
<h4 class="alert-heading mb-1" style="font-size: 35px;">Error!</h4>
<p style="font-size: 18px;">No job postings were found for the location or business you searched for.</p>
<hr>
</div>
@endif




