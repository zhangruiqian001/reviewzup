demand-post.blade.phpdemand-post.blade.php@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body table-responsive">
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

                    <tr>
                        <td>USA</td>
                        <td>$0</td>
                        <td><input type="number" ></td>
                        <td>$2.99</td>
                        <td>$0</td>
                    </tr>
                    <tr>
                        <td>China</td>
                        <td>$0</td>
                        <td><input type="number" ></td>
                        <td>$2.99</td>
                        <td>$0</td>
                    </tr>
                    <tr>
                        <td>UK</td>
                        <td>$0</td>
                        <td><input type="number" ></td>
                        <td>$2.99</td>
                        <td>$0</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
