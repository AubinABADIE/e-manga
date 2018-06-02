@extends('layouts/master')

@section('title', 'Home')

@section('body')
<div class="head-bread">
  <div class="container">
    <ol class="breadcrumb">
      <li class="active">Home</a></li>
    </ol>
  </div>
</div>
<div class="header-end">
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="./images/shoe3.jpg" alt="...">
                <div class="carousel-caption car-re-posn">
                    <h3>Title</h3>
                    <h4>Vol. 00</h4>
                    <span class="color-bar"></span>
                </div>
            </div>
            <div class="item">
              <img src="./images/shoe1.jpg" alt="...">
                <div class="carousel-caption car-re-posn">
                    <h3>Title</h3>
                    <h4>Vol. 00</h4>
                    <span class="color-bar"></span>
                </div>
            </div>
            <div class="item">
              <img src="./images/shoe2.jpg" alt="...">
                <div class="carousel-caption car-re-posn">
                    <h3>Title</h3>
                    <h4>Vol. 00</h4>
                    <span class="color-bar"></span>
                </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left car-icn" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right car-icn" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="feel-fall">
      <div class="container">
        <div class="pull-left fal-box">
          <div class=" fall-left">
            <h3>Mangas</h3>
            <span class="fel-fal-bar"></span>
            <p>Les mangas nous permettent de proposer plus de details sur les oeuvres, les mangakas, etc ... en plus de fournir et donc trier les volumes qui
            lui sont associés</p>
          </div>
        </div>
        <div class="pull-right fel-box">
          <div class="feel-right">
            <h3>Volumes</h3>
            <span class="fel-fal-bar2"></span>
            <p>Les volumes sont les seuls produits achetables du site.</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
@endsection
