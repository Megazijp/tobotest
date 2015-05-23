<?php 
  include("./basic-page.php"); 
  include("./news_functions.inc");
  ?>
<div id="homecarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#homecarousel" data-slide-to="0" class="active"></li>



<?php
$counter = 1;
foreach($page->carouselimages as $image) {
echo <<<EOD
		<li data-target="#homecarousel" data-slide-to="$counter"></li>
EOD;
$counter += 1;
};
?>





	</ol>
	<!-- Wrapper for slides -->
	

	<div class="carousel-inner" role="listbox">
		
			<div class="item active">
			<img src="<?php echo $config->urls->assets?>files/images/carousel/crsl_2.jpg" alt="...">
			<div class="carousel-caption">
			</div>
		</div>
		
							<?php foreach($page->carouselimages as $image) {
echo <<<EOD
	<div class="item">
			<img src='$image->url'>
			<div class="carousel-caption">
			</div>
		</div>
EOD;

};
?>

	</div>
	<!-- Controls -->
	<a class="left carousel-control" href="#homecarousel" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#homecarousel" role="button" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
	</a>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<hr>
			<h2>Welkom!</h2>
			<p><?php echo $page->welkomtekst ?></p>
		</div>
			<div class="col-md-4">
			<h2><?php echo $page->lidvdweektitle ?></h2>

				<?php foreach($page->fotolidvweek as $image) {
  echo "<img class='lidvweek' src='$image->url'>"; 
}?>					<p class="lidcontent"><?php echo $page->
				lidvdweek ?></p>
		

	</div>

				
			<div class=" col-md-4">
					<?php 
						// Grab the page name from the url
					 
						$thisCategory = "news";
					 
						// If the category is not called "news" then output the category name as a selector for the find.
					  $category = null;
					  
						// Get the news posts - limited to ten for later pagination
					 
						$newsposts = wire("pages")->find("parent=/news-articles/, $category, template=news, limit=10");
					
						$out =" ";
					 
						//Loop through the pages
					 $newspost = $newsposts->last();
						if($newspost->article_thumbnails){
							$out .="<a href='{$newspost->article_thumbnails->url}' class=''>";
							$out .="<img class='align_left' src='{$newspost->article_thumbnails->getThumb(listingthumb)}'>";
							$out .="</a>";
						}
						$out .="<h2>{$newspost->title}</h2>";
						
						$tekst = nl2br($newspost->Artikel_Tekst);
						
						if(strlen($tekst) > 800){
							$tekst = substr($tekst,0,800)."...";
							$out .="<p>$tekst <a href='/news/'>Lees verder</a></p>";
						}else{
							$out .="<p>$tekst</p>";
						}
							
						// Pagination
					 
						$out .="<div class='pagination'>";
						$out .= $newsposts->renderPager(array(
					 
									    'nextItemLabel' => "Next",
									    'previousItemLabel' => "Prev",
									    'listMarkup' => "<ul>{out}</ul>",
									    'itemMarkup' => "<li>{out}</li>",
									    'linkMarkup' => "<a href='{url}'>{out}</a>"   
					 
										));
						$out .="</div>";
					 
						echo $out;

					?>
			</div>
		</div>
	</div>
<?php 
  include("./footer.php"); 
  ?>
  

