demand-post.blade.phpdemand-post.blade.php@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <form class="col-md-10 col-md-offset-1 form-horizontal" role="form" method="POST"
                              action="{{ url('/demand/post') }}">
                            {{ csrf_field() }}

                            <div class="form-control">
                                <input type="text" name="info[appUrl][]" placeholder="appUrl">
                                <input type="text" name="info[country][]" placeholder="country">
                            </div>
                            <div class="form-control">
                                <input type="text" name="info[appUrl][]" placeholder="appUrl">
                                <input type="text" name="info[country][]" placeholder="country">
                            </div>
                            <div class="form-control">
                                <input type="text" name="info[appUrl][]" placeholder="appUrl">
                                <input type="text" name="info[country][]" placeholder="country">
                            </div>
                            <button type="submit">提交</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
