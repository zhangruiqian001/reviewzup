@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="text-align: center;margin-right: 5rem;">
            <div style="margin: auto; width: 25rem">
                <img src="{{asset('images/email.png')}}" width="100%">
            </div>
        </div>
        <div style="font-size: 4rem;text-align: center;">
            Incoming!
        </div>
        <div style="text-align: center;font-size: 2rem;margin-top: 2rem">
            We just sent you an email
            <br>
            <br>
            please follow the link in the email to active your account
        </div>
    </div>
@endsection