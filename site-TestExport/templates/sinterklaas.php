<?php 
  include("./basic-page.php"); 
  include("./news_functions.inc");
  ?>

<div class="container content">
	<div class="row">
      <?php echo $page->main ?>
      <?php foreach($page->SinterklaasPlaatje as $image){
print <<<EOD
<img title="$image->description" src="$image->url" width="50%" height="50%" />

EOD;
      
      }?>
		</div>
	</div>
<?php 
  include("./footer.php"); 
  ?>
  

