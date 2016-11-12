@extends('layouts.app')

@section('content')
    <div class="container">
        <form action={{ url('/demand/_create') }} method="post" class="form-horizontal form"
              enctype="multipart/form-data" id="form1">
            {{ csrf_field() }}
            <div class="panel panel-default">
                <div class="panel-body table-responsive">
                    <div>
                        <div>
                            <span>name:</span> <span>{{$data['info']['name']}}</span>
                        </div>
                        <div>
                            <span>icon:</span> <span><img src={{$data['info']['icon']}} /></span>
                        </div>
                        <div>
                            <span>url:</span> <span>{{$data['info']['url']}}</span>
                        </div>
                    </div>
                    <button type="submit">next</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        var a ={!!json_encode($data['items'])!!};
    </script>
@endsection
