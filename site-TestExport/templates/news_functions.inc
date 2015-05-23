<?php


/* LIST ARTICLES
 
This displays a list of articles in div containers on the news-index page. 
 
 
*/
 
function newsList(){
 
	// Grab the page name from the url
 
	$thisCategory = wire("page")->name;
 
	// If the category is not called "news" then output the category name as a selector for the find.
  $category = null;
	if($thisCategory !="news") {
		$category = "article_category.name=" . $thisCategory;
	}	
 
	// Get the news posts - limited to ten for later pagination
 
	$newsposts = wire("pages")->find("parent=/news-articles/, $category, template=news, limit=10");
 
	$out =" ";
 
	//Loop through the pages
	$items = array();
		foreach($newsposts as $newspost){
		 $items[] = $newspost;
		}

	
	
	
 
	foreach(array_reverse($items) as $newspost){
		$out .="<div class='clearfix'>";

		$out .="<h3>{$newspost->title}</h3>";
		$tekst = nl2br($newspost->Artikel_Tekst);
		
		$plaatje = "";		
		$out .="<p>$tekst</p>";
		foreach($newspost->newsthumb as $image){
			$plaatje = "<img src='$image->url' width='50%'>";
			$out .="<br />$plaatje</div><hr />";
		}



		
 
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
 
}

/* List home article */
function newsHome() {
	$thisCategory = wire("page")->name;
 
	// If the category is not called "news" then output the category name as a selector for the find.
  $category = null;
	if($thisCategory !="news") {
		$category = "nieuwtjes";
	}	
 

$out = " ";
// Get news posts
$newsposts = wire("pages")->find("parent=/news-articles/, $category, template=news, limit=10");
$out .="<a href='{$newsposts->url}'><h3>{$newsposts->title}</h3></a>";
echo $out;
}

/* CATEGORIES LIST
 
This lists available categories
 
*/
 
function categoriesList(){
	$categories = wire("pages")->find("parent=/categories/, template=news_index, sort=title");
	$out =" ";
	foreach($categories as $category){
		$out .="<li><a href='{$category->url}'>{$category->title}</a></li>";
	}
 
	echo "<ul>$out</ul>";
 
}
