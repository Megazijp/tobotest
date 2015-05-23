
<?php 
  include("./basic-page.php"); 
  include("./news_functions.inc");
  ?>
<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>scripts/fancybox/source/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>scripts/fancybox/source/helpers/jquery.fancybox-thumbs.css">
<script src="<?php echo $config->urls->templates?>scripts/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="<?php echo $config->urls->templates?>scripts/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>

  <div class="container content">
      <div class="row">
          <div class="col-md-12">
              





<?php


// Configure thumbnail width/height & number of photos to display per page
$thumbWidth = 150;
$thumbHeight = 150;
$imagesPerPage = 32;




// Make ProcessWire pagination work on the images field (see http://processwire.com/talk/topic/390-images-pagination/ for full explanation of this)
$start = ($input->pageNum - 1) * $imagesPerPage;
$total = count($page->images);
$images = $page->Images->slice($start, $imagesPerPage);
// Create a new pageArray to give MarkupPagerNav what it needs
$a = new PageArray();
// Add in some generic placeholder pages
foreach($images as $unused) $a->add(new Page());
// Tell the PageArray some details it needs for pagination
$a->setTotal($total);
$a->setLimit($imagesPerPage);
$a->setStart($start);


?>


<?= $a->renderPager() ?>


<div class="upOneLevel"><a href="<?= $page->parent->url ?>">&larr; Albums</a></div>


<h2><?= $page->title ?></h2>
<hr>


<div class="album">    
    <ul class="album-row row">
      <?php
      if(count($images) > 0) {
        foreach($images as $image) 
        {    
            $thumb = $image->size($thumbWidth, $thumbHeight); 
      ?>
            <li class="album-photo darkenOnHover col span3">
                <a href="<?= $image->url ?>" rel="fancybox-gallery" class="fancybox" title="<?= $image->description ?>">
                    <img src="<?= $thumb->url ?>" alt="<?= $thumb->description ?>" />
                    <!-- Uncomment this line if you want descriptions under images <p class="album-photoDescription"><?= $image->description ?></p>--> 
                </a>
            </li>
      <?php
        }
      }
      ?>
    </ul><!-- /album-row -->
</div><!-- /album -->


<div class="group"><?= $a->renderPager() ?></div>

          </div>
      </div>
  </div>


<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox({
            prevEffect    : 'elastic',
            nextEffect    : 'elastic',
            loop : false,
            mouseWheel: true,
            helpers    : {
                title    : {
                    type: 'outside'
                },
                thumbs    : {
                    width    : 100,
                    height    : 60
                }
            }
        });
    });
</script>


<?php 
  include("./footer.php"); 
  ?>
 