@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div style="text-align: center;margin-top: 3rem;font-size: 2rem">
                        Login
                    </div>
                    <div class="panel-body">
                        <form class="col-md-10 col-md-offset-1 form-horizontal" role="form" method="POST"
                              action="{{ url('/login') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                <input type="text" id="email" class="form-control" placeholder="Email" name="email"
                                       value="{{ old('email') }}">
                            </div>
                            <div class="input-group row form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="glyphicon glyphicon-asterisk"></span>
                                    </span>
                                <input type="password" id="password" class="form-control" placeholder="Password"
                                       name="password">
                            </div>
                            @if ($errors->has('email'))
                                <div class="has-error ">
                                        <span class="help-block">
                                            <strong>*{{ $errors->first('email') }}</strong>
                                        </span>
                                </div>
                            @endif
                            @if ($errors->has('password'))
                                <div class="has-error ">
                                        <span class="help-block">
                                            <strong>*{{ $errors->first('password') }}</strong>
                                        </span>
                                </div>
                            @endif
                            <br>
                            <div class="row">
                                <div class="col-md-6" style="padding: 0">
                                    <label>
                                        <input type="checkbox" name="remember"> <span style="font-size: 0.8rem">Remember Me</span>
                                    </label>
                                </div>
                                <div class="col-md-6" style="padding: 0">
                                    <a href="{{ url('/password/reset') }}"
                                       style="font-size: 0.8rem">Forgot Password?</a>
                                </div>
                            </div>
                            <br>
                            <div class="row" style="margin-bottom: 3rem">
                                <button type="submit" class="btn btn-primary"
                                        style="padding:0;height: 3rem;width: 100%">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
