@extends('layouts/master')

@section('title', 'Volumes')

@section('body')
  <div class="head-bread">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Volumes</li>
      </ol>
    </div>
  </div>
  <div class="products-gallery">
    <div class="container">
      <div class="col-md-9 grid-gallery">
        <?php foreach ($volumes as $volume) { ?>
          <div class="col-md-4 grid-stn simpleCart_shelfItem">
            <!-- normal -->
            <div class="ih-item square effect3 bottom_to_top">
              <div class="bottom-2-top">
                <div class="img">
                  <img src="images/<?php echo $volume->manga_title ?>.png" alt="/" class="img-responsive gri-wid">
                </div>
                <div class="info">
                  <div class="pull-center styl-hdn">
                    <h3><?php echo $volume->manga_title . ' Vol. ' . $volume->volume_number;?></h3>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <!-- end normal -->
            <div class="quick-view">
              <a href="/manga/<?php echo $volume->manga_id ?>/volume/<?php echo $volume->volume_isbn ?>">Quick view</a>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="col-md-3 grid-details">
        <div class="grid-addon">
          <section  class="sky-form">
            <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Manga</h4>
            <div class="row row1 scroll-pane">
              <div class="col col-4">
                <?php foreach ($mangas as $manga) { ?>
                  <label class="checkbox"><input type="checkbox" name="checkbox"><i></i><?php echo $manga->manga_title;?></label>
                <?php } ?>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
@stop
