@extends('layout')

@section('title','Index')
@section('content')
@if (!empty($pages))
<ul>
	@foreach ($pages as $p)
	<li class='nav-item active'><a href='/pages/{{$p->id}}'>{{$p->title}}</a> &nbsp; <button class='btn btn-outline-primary'><a class='nav-link' href='/pages/{{$p->id}}/edit'>Edit or Delete page</a></button>
	@endforeach
</ul>
@endif

@if (!empty($specificpage))

<h1>{{$specificpage->title}}</h1> <br>
{{$specificpage->body}}

@endif


@endsection