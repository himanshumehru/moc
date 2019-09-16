@extends('layouts.app')

@section('content')
<div class="container text-sm-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
<h1>Welcome to the PCOF ABFM MOC. </h1>
<p>Presented to you by Family Medicine Clerkship at the University of Washington School of Medicine</p>
<p>Please <a href="{{url('/login')}}">login</a> or <a href="{{url('/register')}}">register</a> to create an account</p>
</div>
</div>
</div>
@endsection