@extends('layouts/master')

@section('title', 'Mangas')

@section('body')
  <div class="head-bread">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Mangas</li>
      </ol>
    </div>
  </div>
  <div class="products-gallery">
    <div class="container">
      <div class="col-md-9 grid-gallery">
        <?php foreach ($mangas as $manga) { ?>
          <div class="col-md-4 grid-stn simpleCart_shelfItem">
            <!-- normal -->
            <div class="ih-item square effect3 bottom_to_top">
              <div class="bottom-2-top">
                <div class="img">
                  <img src="/images/<?php echo $manga->manga_title;?>.png" alt="/" class="img-responsive gri-wid">
                </div>
                <div class="info">
                  <div class="pull-center styl-hdn">
                    <h3><?php echo $manga->manga_title;?></h3>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <!-- end normal -->
            <div class="quick-view">
              <a href="/manga/<?php echo $manga->manga_id ?>">Quick view</a>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="col-md-3 grid-details">
        <div class="grid-addon">
          <section  class="sky-form">
            <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Type</h4>
            <div class="row row1 scroll-pane">
              <div class="col col-4">
                <?php foreach ($types as $type) { ?>
                  <label class="checkbox"><input type="checkbox" name="checkbox"><i></i><?php echo $type->type_label;?></label>
                <?php } ?>
              </div>
            </div>
          </section>
          <section  class="sky-form">
            <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Publisher</h4>
            <div class="row row1 scroll-pane">
              <div class="col col-4">
                <?php foreach ($publishers as $publisher) { ?>
                  <label class="checkbox"><input type="checkbox" name="checkbox"><i></i><?php echo $publisher->publisher_name;?></label>
                <?php } ?>
              </div>
            </div>
          </section>
          <section  class="sky-form">
            <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories</h4>
            <div class="row row1 scroll-pane">
              <div class="col col-4">
                <?php foreach ($keywords as $keyword) { ?>
                  <label class="checkbox"><input type="checkbox" name="checkbox"><i></i><?php echo $keyword->keyword_label;?></label>
                <?php } ?>
              </div>
            </div>
          </section>
          <section  class="sky-form">
            <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Tri</h4>
            <div class="row row1 scroll-pane">
              <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>A - Z</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Z - A</label>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
@stop
