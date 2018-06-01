@extends('layouts/master')

@section('title', 'Manga')

@section('body')
  <div class="head-bread">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/mangas">Mangas</a></li>
        <li class="active"><?php echo $manga->manga_title ?></li>
      </ol>
    </div>
  </div>
  <div class="showcase-grid">
    <div class="container">
        <div class="col-md-4 showcase">
          <div class="img">
            <img src="../images/<?php echo $manga->manga_title ?>.png" alt="/" data-imagezoom="true" class="img-responsive gri-wid">
          </div>
        </div>
      <div class="col-md-8 showcase">
        <div class="showcase-rt-top">
          <div class="pull-left shoe-name">
              <h3><?php echo $manga->manga_title ?></h3>
              <p><?php echo $mangaka->mangaka_first_name . ' ' . $mangaka->mangaka_last_name ?></p>
          </div>
        <div class="clearfix"></div>
        </div>
        <div class="showcase-last">
            <h3>Description</h3>
            <p><?php echo $manga->manga_description ?></p>
        </div>
        <div class="showcase-last">
          <h3>Item Details</h3>
          <p><b>Publisher : </b><span><?php echo $publisher->publisher_name ?></span></p>
          <p><b>Date de publication : </b><span><?php echo $manga->manga_release_date ?></span></p>
          <p><b>Type : </b><span><?php echo $type->type_label ?></span></p>
          <p><b>Catégorie : </b><span><?php foreach ($keywords as $keyword) { echo $keyword->keyword_label . ', '; } ?></span></p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="products-gallery specifications">
		<div class="container">
  	  <h3>Volumes</h3>
		  <div class="col-md-12 grid-gallery">
			<?php foreach ($volumes as $volume) { ?>
			  <div class="col-md-4 grid-stn simpleCart_shelfItem">
				<!-- normal -->
				<div class="ih-item square effect3 bottom_to_top">
				  <div class="bottom-2-top">
					<div class="img">
            <img src="../images/<?php echo $manga->manga_title ?>.png" alt="/" data-imagezoom="true" class="img-responsive gri-wid">
          </div>
					<div class="info">
					  <div class="pull-center styl-hdn">
						<h3>Vol. <?php echo $volume->volume_number;?></h3>
					  </div>
					  <div class="clearfix"></div>
					</div>
				  </div>
				</div>
				<!-- end normal -->
				<div class="quick-view">
				  <a href="/manga/<?php echo $manga->manga_id ?>/volume/<?php echo $volume->volume_isbn ?>">Quick view</a>
				</div>
			  </div>
			<?php } ?>
		  </div>
		  <div class="clearfix"></div>
		</div>
  </div>
@stop
