@extends('layouts.app')
@section('title')
PCOF MOC
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-8">
            <div class="card">
                <div class="card-header">Patient Centered Observation Form MOC</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Thank you for participating in the Patient Centered Observation Educational Quality Improvement module. 

This module has 4 requirements:

                         <ul>
                        <li><a href="{{url('/pretest')}}">Complete a short pre-test</a></li>
                        <li><a href="{{url('/one-pager')}}">Read this one-pager about Patient Centered Observation</a></li>
                        <li>Complete the Patient Centered Observation Form (PCOF) online training module at <a href="http://www.pcof.us" target="_blank">www.pcof.us</a></li>
                        <li>Observe the same student 4 times over the course of 6 weeks using the  <a href="https://docs.google.com/forms/d/e/1FAIpQLSeODysWVM9WrwgY4Y9LNUJybK4STc53S9uj_FHd27r10p9ukA/viewform" target="_blank">PCOF</a></li>
                        <li><a href="{{url('/post-test')}}">Complete a short post-test</a></li>
                    </ul>
    


 

After completing all parts of this module, you will have fulfilled an ABFM Part IV requirement and we will submit your name and information to the ABFM for credit.

 </p>


                </div>
            </div>
        </div>

@include('profile')
    </div>
</div>
@endsection
