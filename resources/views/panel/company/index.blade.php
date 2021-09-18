@extends('panel.layout.layout')

@section('title', $title)

@section('breadcrumb')
<li class="list-inline-item">
<a href="{{ route('panel.index') }}">Home</a> </li><span>/</span>
</li><li class="list-inline-item">{{ $title }}</li>
@endsection

@section('content')
<div class="col-lg-10"></div>
<div class="col-lg-2 "><a href="{{route('panel.company.edit')}}" class="btn btn-info" style="text-align: right;"><i class="fas fa-plus"></i> Add New Company</a></div>

<table class="table table-data2">
<thead>
<tr>
<th>
</th>
<th>Company Name</th>
<th>Owner</th>
<th>Cellphone</th>
<th>Email</th>
<th></th>
</tr>
</thead>

<tbody>
<tr class="tr-shadow">
    @foreach ($companyList as $company)
    <td>
    <span class="badge badge-{{ $company->statusCode() }}">{{ strtoupper($company->status) }}</span>
</td>
<td>{{ $company->name }}</td>
<td class="desc">{{ $company->owner }}</td>
<td>+90{{ $company->cellphone }}</td>
<td>
<span class="block-email">{{ $company->email }}</span>
</td>
<td>
<div class="table-data-feature">
<a href="{{route('panel.company.edit', ['company_id' => $company->id])}}" class="item"><i class="zmdi zmdi-edit"></i></a>
<a href="{{route('panel.company.delete', ['company_id' => $company->id])}}" class="item" onclick="return areYouSureDelete()"><i class="zmdi zmdi-delete"></i></a>
<tr class="spacer"></tr>
    @endforeach


</div>
</td>
</tr>
<tr class="spacer"></tr>
<tr class="tr-shadow">

</div>
</td>
</tr>
</tbody>
</table>
@endsection
