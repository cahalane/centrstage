@extends('layout')

@section('main')

<h1>Create Stream</h1>

<form method="POST" action="/streams">
	{{ csrf_field() }}

	<label for="title">Title</label>
	<input name="title" type="text" value="{{ old('title') }}">

	<label for="date">Date</label>
	<input name="date" type="date" value="{{ old('date') }}">

	<label for="time">Time</label>
	<input name="time" type="time" value="{{ old('time') }}">

	<button type="submit" action="submit">Create</button>

</form>

@endsection