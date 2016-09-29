@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>

            <div class="panel-body">
                <form class="col-md-10 col-md-offset-1 form-horizontal" role="form" method="POST"
                      action="{{ url('/demand/post') }}">
                    {{ csrf_field() }}
                    <div class="form-control">
                        <input type="text" name="info[appUrl][]" placeholder="appUrl">
                    </div>
                    <button type="submit">next</button>
                </form>
            </div>
        </div>

    </div>
@endsection
