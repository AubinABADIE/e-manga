@extends('layouts/master')

@section('title', 'Cart')

@section('body')
  <div class="head-bread">
      <div class="container">
          <ol class="breadcrumb">
              <li><a href="/">Home</a></li>
              <li class="active">Cart</li>
          </ol>
      </div>
  </div>
  <!-- check-out -->
  <div class="check">
    <div class="container">
        <div class="col-md-3 cart-total">
            <a class="continue" href="/manga">Continue to basket</a>
            <div class="price-details">
                <h3>Price Details</h3>
                <span>Total</span>
                <span class="total1"><span class="simpleCart_total"></span></span>
                <span>Discount</span>
                <span class="total1">0%</span>
                <span>Shipping</span>
                <script>
                    simpleCart({
                        shippingCustom: function(){
                            if( simpleCart.quantity() <= 0 ){
                                return 0;
                            } else if( simpleCart.quantity() > 0 && simpleCart.total() > 25 ){
                                return 0;
                            } else {
                                return 10;
                            }
                        }
                    });
                </script>
                <span class="total1"><span class="simpleCart_shipping"></span></span>
                <div class="clearfix"></div>
            </div>
            <hr class="featurette-divider">
            <ul class="total_price">
                <li class="last_price"> <h4>TOTAL</h4></li>
                <li class="last_price"><span><span class="simpleCart_grandTotal"></span></li>
                <div class="clearfix"> </div>
            </ul>
            <div class="clearfix"></div>
            <a class="order" href="#">Continue to pay</a>
        </div>
        <div class="col-md-9 cart-items">
            <h1>My Shopping Bag (<span class="simpleCart_quantity"></span>)</h1>
            <div class="simpleCart_items"></div>
        </div>
    </div>
  </div>
  <!-- check-out -->
@stop
