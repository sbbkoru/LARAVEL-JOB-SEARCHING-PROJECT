@extends('panel.layout.layout')

@section('title', $title)

@section('breadcrumb')
<li class="list-inline-item">
<a href="{{ route('panel.index') }}">Home</a> </li><span>/</span>
</li><li class="list-inline-item">{{ $title }}</li>
@endsection

@section('content')
<div class="col-lg-10">@if (Session::get('categoryupdate'))
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
<span class="badge badge-pill badge-success">Success</span>
You successfully updated categories.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
    @endif
    @if (Session::get('categorydelete'))
    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
<span class="badge badge-pill badge-danger">Delete</span>
You successfully deleted a category.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
    @endif</div>
<div class="col-lg-2 "><a href="{{route('panel.category.edit')}}" class="btn btn-info" style="text-align: right;"><i class="fas fa-plus"></i> Add New Category</a></div>

<table class="table table-data2">
<thead>
<tr>
<th>
</th>
<th>Category Name</th>
<th>Code</th>
<th></th>
</tr>
</thead>

<tbody>
<tr class="tr-shadow">
    @foreach ($categoryList as $category)
    <td>
</td>
<td>{{ $category->name }}</td>
<td class="desc">{{ $category->code }}</td>
<td>
<div class="table-data-feature">
<a href="{{route('panel.category.edit', ['category_id' => $category->id])}}" class="item"><i class="zmdi zmdi-edit"></i></a>
<a href="{{route('panel.category.delete', ['category_id' => $category->id])}}" class="item" onclick="return areYouSureDelete()"><i class="zmdi zmdi-delete"></i></a>
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
