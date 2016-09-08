@extends('layouts.app')

@section('content')
    <div class="container">
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
                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="input-group ">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </span>
                                    <input type="text" id="name" class="form-control" placeholder="Name" name="name"
                                           aria-describedby="basic-addon1" value="{{old('name')}}">
                                </div>
                                @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="input-group ">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                    <input type="text" id="email" class="form-control" placeholder="Email" name="email"
                                           aria-describedby="basic-addon1" value="{{old('email')}}">
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="glyphicon glyphicon-asterisk"></span>
                                    </span>
                                    <input type="password" id="password" class="form-control" placeholder="Password"
                                           name="password"
                                           aria-describedby="basic-addon1">
                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="glyphicon glyphicon-asterisk"></span>
                                    </span>
                                    <input type="password" id="password-confirm" class="form-control"
                                           placeholder="Confirm your Password" name="password_confirmation"
                                           aria-describedby="basic-addon1">
                                </div>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('agreement') ? ' has-error' : '' }}">
                                <div class="input-group">
                                    <input type="checkbox" id="agreement" name="agreement">&nbsp; <span style="font-size: 0.5rem">I agree to bound by Reviewzup's <a
                                                href="#">Terms of Service</a> and <a href="#">Privacy Policy.</a></span>
                                </div>
                                @if ($errors->has('agreement'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('agreement') }}</strong>
                                    </span>
                                @endif
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
@endsection
