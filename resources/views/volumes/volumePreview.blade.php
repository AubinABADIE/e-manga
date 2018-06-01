@extends('layouts/master')

@section('title', 'Volume')

@section('body')
  <div class="head-bread">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/volume">Volume</a></li>
        <li class="active">Vol. <?php echo $volume->volume_number ?></li>
      </ol>
    </div>
  </div>
  <div class="showcase-grid">
    <div class="container">
        <div class="col-md-8 showcase">
            <div class="flexslider">
                  <ul class="slides">
                    <li data-thumb="images/show.jpg">
                        <div class="thumb-image"> <img src="images/show.jpg" data-imagezoom="true" class="img-responsive"> </div>
                    </li>
                    <li data-thumb="images/show1.jpg">
                         <div class="thumb-image"> <img src="images/show1.jpg" data-imagezoom="true" class="img-responsive"> </div>
                    </li>
                    <li data-thumb="images/show2.jpg">
                       <div class="thumb-image"> <img src="images/show2.jpg" data-imagezoom="true" class="img-responsive"> </div>
                    </li>
                    <li data-thumb="images/show3.jpg">
                       <div class="thumb-image"> <img src="images/show3.jpg" data-imagezoom="true" class="img-responsive"> </div>
                    </li>
                  </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-4 showcase">
            <div class="showcase-rt-top">
                <div class="pull-left shoe-name">
                    <h3><?php echo $volume->volume_title;?></h3>
                    <p>Vol. <?php echo $volume->volume_number;?></p>
                    <h4>&#36;<?php echo $volume->volume_price;?></h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <hr class="featurette-divider">
            <div class="shocase-rt-bot">
                <div class="float-qty-chart">
                <ul>
                    <li class="qty">
                        <h4>QTY</h4>
                        <select class="form-control qnty-chrt">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                        </select>
                    </li>
                </ul>
                <div class="clearfix"></div>
                </div>
                <ul>
                    <li class="ad-2-crt simpleCart_shelfItem">
                        <a class="btn item_add" href="#" role="button">Add To Cart</a>
                        <a class="btn" href="#" role="button">Buy Now</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="specifications">
    <div class="container">
      <h3>Item Details</h3>
        <div class="detai-tabs">
            <!-- Nav tabs -->
            <ul class="nav nav-pills tab-nike" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
            <li role="presentation"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">Reviews</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home">
              <p><?php echo $volume->volume_synopsis ?></p>
              </div>
              <div role="tabpanel" class="tab-pane" id="review">
              </div>
            </div>
        </div>
    </div>
</div>
@stop
