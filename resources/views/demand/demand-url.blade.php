@extends('layouts.app')

@section('content')
    <style>
        .step-item{display: inline-block}
        .step-item div {display:inline-block;color:white;}
        .step-item .cube {width: 100px;height: 30px;line-height: 30px;}
        .step-item .circle {width: 50px;height: 50px;border-radius: 50%;line-height: 50px;}
        .step-item:nth-child(1) div{background-color: #0066FF;}
        .step-item:nth-child(2) div{background-color: #33CC00;}
        .step-item:nth-child(3) div{background-color: #FF9900;}
        .step-item:nth-child(4) div{background-color: #FF0033;}
    </style>
    <div class="container container-section">
        <div style="text-align: center;margin: 100px;">
            <div class="step-item">
                <div class="cube">submit url</div>
                <div class="circle">1</div>
            </div>
            <div class="step-item">
                <div class="cube">set bill</div>
                <div class="circle">2</div>
            </div>
            <div class="step-item">
                <div class="cube">pay</div>
                <div class="circle">3</div>
            </div>
            <div class="step-item">
                <div class="cube">success</div>
                <div class="circle">4</div>
            </div>
        </div>
        <form class="col-md-10 col-md-offset-1 form-horizontal" role="form" method="POST"
              action="{{ url('/demand/preview') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="app_url" style="line-height: 50px;">Please submit your app itunes link</label>
                <input style="height: 50px;" type="text" class="form-control" name="app_url" placeholder="Paste into the app link">
            </div>
            <div class="form-group" style="text-align: center;">
                <button type="submit" style="padding-left: 50px;padding-right: 50px;" class="btn btn-success btn-lg">next</button>
            </div>

        </form>
    </div>
@endsection
