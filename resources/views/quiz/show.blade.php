@extends('layouts.app')

@section('content')
<ul>
@foreach ($allquizzes as $quiz)
<li>{{$quiz->title}}: {{$quiz->description}} <a href="">edit</a></li>
@endforeach
</ul>
<a href="/quizzes/create" class="btn btn-primary">Add Quiz</a>
@endsection