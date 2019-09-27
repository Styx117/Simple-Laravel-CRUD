@extends('layout')
@section('title','Create new page')
@section('content')
<form action="/pages" method="POST">
	{{csrf_field()}}
	<legend>Create a new page</legend>

	<div class="form-group">
		<label>Title</label>
		<input type="text" name="title" class="form-control {{$errors->has('title') ? 'border-danger' : ''}}" placeholder="Input field" required>
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea name="body" class="form-control {{$errors->has('body') ? 'border-danger' : ''}}" cols="30" rows="10" required></textarea>
	</div>
	<button type="submit" class="btn btn-primary">Create !</button>
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