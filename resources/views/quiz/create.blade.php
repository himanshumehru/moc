@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Create a new quiz</h1>
	<form method="post" action="/quizzes">
		{{csrf_field()}}
		<label for="title"> Title: </label>
		<input type="text" name="title" required>
		<label for="description">Description:</label>
		<textarea name="description" required=""></textarea> 
		<input type="submit">
	</form>
</div>


@endsection