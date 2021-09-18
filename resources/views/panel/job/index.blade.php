@extends('panel.layout.layout')

@section('title', $title)

@section('breadcrumb')
<li class="list-inline-item">
<a href="{{ route('panel.index') }}">Home</a> </li><span>/</span>
</li><li class="list-inline-item">{{ $title }}</li>
@endsection

@section('content')
<div class="col-lg-10"></div>
<div class="col-lg-2 mb-3"><a href="{{route('panel.job.edit')}}" class="btn btn-info" style="text-align: right;"><i class="fas fa-plus"></i> Add New Job</a></div>


@foreach ($jobList as $job )


<div class="col-md-6">
<div class="card" style="min-height: 300px;">
<div class="card-header">
<strong class="card-title">{{ $job->name }}

@if ($job->remote == 1)
    <span class="badge badge-success float-right mt-1">Remote</span>
@endif

</strong>
</div>
<div class="card-body">
<p class="card-text">{{$job->text}}
</p>
<br>
<p >Experience:  {{$job->experiencestart}}-{{$job->experienceend}} years </p>
<p><span><i class="card-title">{{ $job->company->name }}
</i></span>
<span style="margin-left: 300px;">{{$job->salary}}  @switch($job->currencyid)
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
<strong class="card-title" style="margin-right: 290px;">{{ $job->location->name }} , {{ $job->location->province->name }}
</strong>
<a style="text-align: right;" href="{{ route('panel.job.edit', ['job_id' => $job->id, 'company_id' => $job->company_id, 'location_id' => $job->location_id, 'category_id' => $job->category_id, 'currencyid' => $job->currencyid, 'remote' => $job->remote]) }}" class="item"><i class="zmdi zmdi-edit"></i></a>
<a style="text-align: right;" href="{{ route('panel.job.delete', ['job_id' => $job->id]) }}" class="item" onclick="return areYouSureDelete()"><i class="zmdi zmdi-delete"></i></a>
</div>
</div>
 </div>
</div>
@endforeach

<div class="mt-3" style="margin-left: 15px;">
{{ $jobList->links() }}
</div>
@endsection
