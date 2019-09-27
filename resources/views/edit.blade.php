@extends('layout')
@section('title','Create new page')
@section('content')
<form action="/pages/{{$page->id}}" method="POST">
	{{csrf_field()}}
	@method('PATCH')
	<legend>Edit or delete page</legend>

	<div class="form-group">
		<label>Title</label>
		<input type="text" name="title" class="form-control  {{$errors->has('title') ? 'border-danger' : ''}}" placeholder="Input field" required value="{{$page->title}}">
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea name="body" class="form-control  {{$errors->has('body') ? 'border-danger' : ''}}" cols="30" rows="10" required>{{$page->body}}</textarea>
	</div>
	<button type="submit" class="btn btn-primary">Change !</button>
</form>

<br>



<form action="/pages/{{$page->id}}" method="POST">
	{{csrf_field()}}
	@method('DELETE')
	<button type="submit" class="btn btn-danger">Delete !</button>
</form>

<br><br>

@if ($errors->any())

<div class="alert bg-danger">

	@foreach ($errors->all() as $e)
	{{$e}}<br>
	@endforeach

</div>
@endif

@endsection