<?php 
  include("./basic-page.php"); 
  include("./news_functions.inc");
  ?>

<div class="container content">
	<style>
		td {
			border: 1px solid #333;
		}
	</style>
	<div class="row">
				<div class="col-md-12">
					<h1>Uploads</h1>
				<table width="100%">
					<tr>
						<td><strong>Naam:</strong></td><td><strong>Grootte:</strong></td><td><strong>Description:</strong></td><td><strong>Extensie:</strong></td></tr>
						<?php
								$uploadpage = $pages->get("/uploads");
					foreach($uploadpage->fields as $field) {
      			if($field->type instanceof FieldtypeFile && !$field->type instanceof FieldtypeImage) {
							$file = $page->get($field->name);
					
							if($file){
								foreach($file as $f) {
									echo '<tr><td><a href="'.$f->url.'">'.$f->name.'</a></td><td>';echo $f->filesizeStr;echo '</td><td>'.$f->description;echo '</td><td>'.$f->ext;echo '</td></tr>';
							}
					
						}
					
					}
					}
						?>
					</tr>
				</table>
				
				</div>
      
		</div>
	</div>
<?php 
  include("./footer.php"); 
  ?>