@extends('panel.layout.layout')

@section('title', $title)

@section('breadcrumb')
<li class="list-inline-item">
<a href="{{ route('panel.index') }}">Home</a> </li><span>/</span>
</li><li class="list-inline-item">{{ $title }}</li>

@endsection

@section('content')

<div class="col-lg-10">@if (Session::get('locationupdate'))
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
<span class="badge badge-pill badge-success">Success</span>
You successfully updated locations.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
    @endif
    @if (Session::get('locationdelete'))
    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
<span class="badge badge-pill badge-danger">Delete</span>
You successfully deleted a location.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
    @endif
    @if (Session::get('provinceupdate'))
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
<span class="badge badge-pill badge-success">Success</span>
You successfully updated provinces.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
    @endif
    @if (Session::get('provincedelete'))
    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
<span class="badge badge-pill badge-danger">Delete</span>
You successfully deleted a province.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
    @endif</div>
<div class="col-lg-2 "><a href="{{route('panel.province.edit')}}" class="btn btn-info" style="text-align: right;"><i class="fas fa-plus"></i> Add New Province</a></div>


<div class="col-lg-6">
<div class="table-responsive table-responsive-data-2">
<table class="table table-data2">
<thead>
<tr>
<th>Province</th>
<th>Code</th>
<th>Licence Code</th>
</tr>
</thead>

<tbody>
<tr class="tr-shadow">
    @foreach ($provinceList as $province)
<td><a href="{{ route('panel.province.index', ['province_id' => $province->id]) }}">{{ $province->name}}</a> </td>
<td class="desc">{{ $province->code }}</td>
<td>{{ $province->licencecode }}</td>
<td>
<div class="table-data-feature">
    <a href="{{route('panel.location.edit', ['province_id' => $province->id])}}" class="item"><i class="zmdi zmdi-plus-circle-o"></i>
</a>
<a href="{{ route('panel.province.edit', ['province_id' => $province->id]) }}" class="item"><i class="zmdi zmdi-edit"></i></a>
<a href="{{ route('panel.province.delete', ['province_id' => $province->id]) }}" class="item" onclick="return areYouSureDelete()"><i class="zmdi zmdi-delete"></i></a>
<tr class="spacer"></tr>
</div>
</td>
    @endforeach
    </tr>
<tr class="spacer"></tr>
<tr class="tr-shadow">
    </tbody>
    </table>
    </div>
    </div>



@if (request()->get('province_id'))
<div class="col-lg-6">
<div class="table-responsive table-responsive-data-2">
<table class="table table-data2">
<thead>
<tr>
<th>Location</th>
<th>Code</th>
</tr>
</thead>

<tbody>
<tr class="tr-shadow">
    @foreach ($locationList as $location)
<td><a href="#"> {{ $location->name }}</a> </td>
<td class="desc">{{ $location->code }}</td>
<td>
<div class="table-data-feature">
<a href="{{route('panel.location.edit', ['province_id' => $location->province_id, 'location_id' => $location->id])}}" class="item"><i class="zmdi zmdi-edit"></i></a>
<a href="{{route('panel.location.delete', ['province_id' => $location->province_id, 'location_id' => $location->id])}}" class="item" onclick="return areYouSureDelete()" ><i class="zmdi zmdi-delete"></i></a>
<tr class="spacer"></tr>
</div>
</td>
@endforeach
</tr>
<tr class="spacer"></tr>
<tr class="tr-shadow"></tr>
</tbody>
</table>
</div>
</div>
@endif

@endsection
