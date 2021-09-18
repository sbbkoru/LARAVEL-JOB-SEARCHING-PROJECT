@extends('site.layout.layout');

@section('breadcrumb')
<li class="list-inline-item active">
<a href="{{ route('site.index') }}">Home</a> </li><span>/</span>
<li class="list-inline-item">
<a href="">Search {{ $title }}</a> </li>
@endsection

@section('content')
            <section class="welcome p-t-10">
                <div class="container">
                <h1>Search {{ $title }}</h1>
                </div>
            </section>

@endsection
