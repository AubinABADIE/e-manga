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
              <a href="/manga/5/volume/978-2-7234-4904-5">
                <img src="{{ secure_asset('images/Berserk.png') }}" alt="..." class="img-responsive">
                <div class="carousel-caption car-re-posn">
                    <h3>Berserk</h3>
                    <h4>Vol. 5</h4>
                    <span class="color-bar"></span>
                </div>
              </a>
            </div>
            <div class="item">
              <a href="/manga/11/volume/978-2-7234-5584-8">
                <img src="{{ secure_asset('images/D.Gray-Man.png') }}" alt="..." class="img-responsive">
                <div class="carousel-caption car-re-posn">
                    <h3>D.Gray-man</h3>
                    <h4>Vol. 1</h4>
                    <span class="color-bar"></span>
                </div>
              </a>
            </div>
            <div class="item">
              <a href="/manga/1/volume/978-2-7234-3431-7">
                <img src="{{ secure_asset('images/One Piece.png') }}" alt="..." class="img-responsive">
                <div class="carousel-caption car-re-posn">
                    <h3>One Piece</h3>
                    <h4>Vol. 2</h4>
                    <span class="color-bar"></span>
                </div>
              </a>
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
            <p>are displayed on this website, with a few informations about them, for a single purpose: allow yourselves to find happiness!</p>
          </div>
        </div>
        <div class="pull-right fel-box">
          <div class="feel-right">
            <h3>Volumes</h3>
            <span class="fel-fal-bar2"></span>
            <p>are the purchasable products of this website, make your choice and add it to your cart!</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
@endsection
