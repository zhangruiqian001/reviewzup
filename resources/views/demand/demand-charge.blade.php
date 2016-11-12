@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="form1">
            <div class="panel panel-default">
                <div class="panel-body table-responsive">
                    <div>
                        <div>
                           <span>name:</span> <span>{{$data['info']['name']}}</span>
                        </div>
                        <div>
                            <span>icon:</span> <span><img src ={{$data['info']['icon']}} /></span>
                        </div>
                        <div>
                            <span>url:</span> <span>{{$data['info']['url']}}</span>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th style="width:200px;">Country</th>
                            <th style="width:200px;">Price</th>
                            <th style="width:100px;">Number</th>
                            <th style="width:100px;">Service charge</th>
                            <th style="width:100px;">Subtotal</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data['items'] as $item)
                            <tr>
                                <td>{{$item['country']}}</td>
                                <td>${{$item['unitServicePrice']}}</td>
                                <td><input type="number"></td>
                                <td>${{$item['appPrice']}}</td>
                                <td>$0</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
@endsection
