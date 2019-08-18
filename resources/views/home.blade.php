@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">UW FMC Teaching MOC</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Thank you for participating in the Patient Centered Observation Educational Quality Improvement module. 

This module has 4 requirements:

                         <ul>
                        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLScU67X4zDXc4mKXKQs6mfFqebPsJ3NQ1A9fZkseMi9FLdCQxw/viewform?vc=0&c=0&w=1&usp=mail_form_link" target="_blank">Complete a short pre-test</a></li>
                        <li>Complete the Patient Centered Observation Form (PCOF) online training module at <a href="http://www.pcof.us" target="_blank">www.pcof.us</a></li>
                        <li>Observe the same student 4 times over the course of 6 weeks using the  <a href="https://docs.google.com/forms/d/e/1FAIpQLSeODysWVM9WrwgY4Y9LNUJybK4STc53S9uj_FHd27r10p9ukA/viewform" target="_blank">PCOF</a></li>
                        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSc4hdViTCHau7K67aQAE5kkzkTWq2TycRbaO5IKMvKMKtMMig/viewform?vc=0&c=0&w=1&usp=mail_form_link" target="_blank">Complete a short post-test</a></li>
                    </ul>
    


 

After completing all parts of this module, you will have fulfilled an ABFM Part IV requirement and we will submit your name and information to the ABFM for credit.

 </p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
