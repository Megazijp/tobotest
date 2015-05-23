<?php 
  include("./basic-page.php"); 
  include("./news_functions.inc");
  ?>

<div class="container content">
	<div class="row">
      <?php echo $page->main ?>
      
      <?php
      foreach($page->middenplaatje as $image) {
        echo "<img src='$image->url'>"; 
      }
      ?>
		</div>
	</div>
<?php 
  include("./footer.php"); 
  ?>
  

