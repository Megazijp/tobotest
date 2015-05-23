
<?php 
  include("./basic-page.php"); 
  include("./news_functions.inc");
  ?>
<?php
// Configure thumbnail width/height
$thumbWidth = 250;
$thumbHeight = 250;


// Create an array of the child pages that use the gallery-album template
$albums = $page->children('template=gallery-album');
?>



<div class="container content">   

    <div class="row">
          <div class="col-md-12">
            <h1>Galerij</h1>
            <hr>

    <ul class="gallery-row row">
      <?php
      if(count($albums) > 0) {
        foreach($albums as $album) 
        {    
            // Grab the first image from the album and create a thumbnail of it
            $thumb = $album->Images->first()->size($thumbWidth, $thumbHeight); 
      ?>
            <li class="col span4">
                <div class="gallery-album photoShadow"><center>
                    <a href="<?= $album->url ?>" class="gallery-albumThumb" title="<?= $album->title ?>">
                        <img src="<?= $thumb->url ?>" alt="<?= $thumb->description ?>" />
                        <h4 class="gallery-albumTitle"><?= $album->title ?></h4>
                    </center>
                    </a>
                </div><!-- /gallery-album -->
            </li><!-- /col -->
      <?php
        }
      }
      ?>
    </ul><!-- /gallery-row -->
</div><!-- /gallery -->
</div>
    </div>



<?php 
  include("./footer.php"); 
  ?>
 