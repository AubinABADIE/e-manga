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
              <a class="continue" href="/">Continue to basket</a>
              <div class="price-details">
                  <h3>Price Details</h3>
                  <span>Total</span>
                  <span class="total1">6200.00</span>
                  <span>Discount</span>
                  <span class="total1">10%(Festival Offer)</span>
                  <span>Delivery Charges</span>
                  <span class="total1">150.00</span>
                  <div class="clearfix"></div>
              </div>
              <hr class="featurette-divider">
              <ul class="total_price">
                 <li class="last_price"> <h4>TOTAL</h4></li>
                 <li class="last_price"><span>6150.00</span></li>
                 <div class="clearfix"> </div>
              </ul>
              <div class="clearfix"></div>
              <a class="order" href="#">Place Order</a>
          </div>
          <div class="col-md-9 cart-items">
              <h1>My Shopping Bag (2)</h1>
                  <script>$(document).ready(function(c) {
                      $('.close1').on('click', function(c){
                          $('.cart-header').fadeOut('slow', function(c){
                              $('.cart-header').remove();
                          });
                          });
                      });
                 </script>
              <div class="cart-header">
              <div class="close1"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></div>

                  <div class="cart-sec simpleCart_shelfItem">
                      <div class="cart-item cyc">
                          <img src="images/grid8.jpg" class="img-responsive" alt=""/>
                      </div>
                     <div class="cart-item-info">
                          <ul class="qty">
                              <li><p>Manga: One Piece</p></li>
                              <li><p>Vol. 1</p></li>
                              <li><p>Qty: 1</p></li>
                              <li><p>Unit price: $190</p></li>
                          </ul>
                          <div class="delivery">
                               <p>Service Charges : Rs.190.00</p>
                               <span>Delivered in 2-3 bussiness days</span>
                               <div class="clearfix"></div>
                          </div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>
          </div>
          <div class="clearfix"> </div>
      </div>
  </div>
  <!-- check-out -->
@stop
