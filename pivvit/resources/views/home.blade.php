@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <pre>
                        <p>API Endpoint: <a href="{{url('getPurchases')}}">/api/v1/purchases</a></p>
                        <p>Method: GET</p>
                    </pre>
                    <pre>
                        <p>API Endpoint: <a href="{{url('createPurchases')}}">/api/v1/purchases</a></p>
                        <p>Method: POST</p>
                    </pre>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
