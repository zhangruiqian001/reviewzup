@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{ old('name') }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div style="text-align: center; margin-top: 3rem;font-size: 2rem">
                        Sign Up
                    </div>
                    <div class="panel-body">
                        <form class="col-md-10 col-md-offset-1 form-horizontal" role="form" method="POST"
                              action="{{ url('/register') }}">
                            {{ csrf_field() }}
                            <div class="input-group form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <span class="input-group-addon" id="basic-addon1">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" id="name" class="form-control" placeholder="Name" name="name"
                                       aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <span class="input-group-addon" id="basic-addon1">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="text" id="email" class="form-control" placeholder="Email" name="email"
                                       aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <span class="input-group-addon" id="basic-addon1">
                                    <span class="glyphicon glyphicon-asterisk"></span>
                                </span>
                                <input type="password" id="password" class="form-control" placeholder="Password" name="password"
                                       aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <span class="input-group-addon" id="basic-addon1">
                                    <span class="glyphicon glyphicon-asterisk"></span>
                                </span>
                                <input type="password" id="password-confirm" class="form-control"
                                       placeholder="Confirm your Password" name="password_confirmation"
                                       aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group form-group">
                                <input type="checkbox">&nbsp; <span style="font-size: 0.5rem">I agree to bound by Reviewzup's <a
                                    href="#">Terms of Service</a> and <a href="#">Privacy Policy.</a></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary col-md-12"
                                        style="padding:0;height: 3rem">
                                    Register
                                </button>
                            </div>
                            <div class="form-group">
                                <span style="font-size: 0.1rem">
                                    No spam, email address is for account generation and order confirmation
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{--<div class="panel panel-default" style="margin: auto;width: 30%">--}}
    {{--<div class="panel-heading" style="margin: auto;text-align: center">Sign UP</div>--}}
    {{--<div class="panel-body">--}}
    {{--<form>--}}
    {{--<div class="input-group">--}}
    {{--<span class="input-group-addon" id="basic-addon1">--}}
    {{--<span class="glyphicon glyphicon-user"></span>--}}
    {{--</span>--}}
    {{--<input type="text" id="name" class="form-control" placeholder="Name"--}}
    {{--aria-describedby="basic-addon1">--}}
    {{--</div>--}}
    {{--<br>--}}
    {{--<div class="input-group">--}}
    {{--<span class="input-group-addon" id="basic-addon1">--}}
    {{--<span class="glyphicon glyphicon-envelope"></span>--}}
    {{--</span>--}}
    {{--<input type="text" id="email" class="form-control" placeholder="Email"--}}
    {{--aria-describedby="basic-addon1">--}}
    {{--</div>--}}
    {{--<br>--}}
    {{--<div class="input-group">--}}
    {{--<span class="input-group-addon" id="basic-addon1">--}}
    {{--<span class="glyphicon glyphicon-asterisk"></span>--}}
    {{--</span>--}}
    {{--<input type="password" id="password" class="form-control" placeholder="Password"--}}
    {{--aria-describedby="basic-addon1">--}}
    {{--</div>--}}
    {{--<br>--}}
    {{--<div class="input-group">--}}
    {{--<input type="checkbox">&nbsp; <span style="font-size: 0.5rem">I agree to bound by Reviewzup's <a--}}
    {{--href="#">Terms of Service</a> and <a href="#">Privacy Policy.</a></span>--}}
    {{--</div>--}}
    {{--<div class="btn-group">--}}
    {{--<button type="submit" class="btn btn-primary">--}}
    {{--Login--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
@endsection
