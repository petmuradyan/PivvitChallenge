@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Dashboard</div>

          <div class="panel-body">
            <table class="table" id="showPurchases">
              <caption>Api Endpoint: /api/v1/purchases</caption>
              <caption>Method: Get <button id="getPurchases">Proceed</button></caption>
              <thead>
              <tr>
                <th>Purchase ID</th>
                <th>Offering title</th>
                <th>Quantity</th>
                <th>Unit price</th>
                <th>Total</th>
              </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
