@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Dashboard</div>

          <div class="panel-body">
            <form id="makePurchaseForm">
              <div class="form-group">
                <label for="offer">Offer</label>
                <select name='offeringID' id="offeringID" class="form-control">
                  <option value="">Select Sport</option>
                  @if (count($offers) > 0)
                    @foreach ($offers as $offer)
                      <option value="{{$offer->id}}" data-price="{{$offer->price}}">{{$offer->title}}</option>
                    @endforeach
                  @endif
                </select>
              </div>
              <div class="form-group">
                <label for="customerName">Customer Name</label>
                <input type="text" class="form-control" id="customerName" placeholder="Customer Name">
              </div>
              <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" min="1" class="form-control" id="quantity" placeholder="Quantity">
              </div>
              <div class="form-group">
                <label for="total">Total Amount</label>
                <input type="number" min="1" class="form-control" id="total" placeholder="Total Amount" readonly>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
