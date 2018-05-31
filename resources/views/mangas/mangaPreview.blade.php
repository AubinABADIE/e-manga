@extends('layouts/master')

@section('title', 'Mangas')

@section('script')
  <!-- FlexSlider -->
  <script src="{{ URL::asset('js/imagezoom.js') }}"></script>
  <script defer src="{{ URL::asset('js/jquery.flexslider.js') }}"></script>
  <link rel="stylesheet" href="{{ URL::asset('css/flexslider.css') }}" type="text/css" media="screen" />

  <script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
        });
    });
  </script>
  <!-- //FlexSlider-->
@stop

@section('body')
  <div class="head-bread">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/manga">Mangas</a></li>
        <li class="active"><?php echo $manga->manga_title ?></li>
      </ol>
    </div>
  </div>
  <div class="products-gallery">
    <div class="container">
      <div class="col-md-12 grid-gallery">
        <?php foreach ($volumes as $volume) { ?>
          <div class="col-md-4 grid-stn simpleCart_shelfItem">
            <!-- normal -->
            <div class="ih-item square effect3 bottom_to_top">
              <div class="bottom-2-top">
                <div class="img"><img src="images/grid4.jpg" alt="/" class="img-responsive gri-wid"></div>
                <div class="info">
                  <div class="pull-center styl-hdn">
                    <h3>Volume #<?php echo $volume->volume_number;?></h3>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <!-- end normal -->
            <div class="quick-view">
              <a href="/volume/<?php echo $volume->volume_isbn ?>">Quick view</a>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="clearfix"></div>

    </div>

  </div>
@stop
