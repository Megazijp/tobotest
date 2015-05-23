<footer>
<div class="container">  
   <div class="row">
     <div class="col-sm-3 col-md-3 whitelink">
      <div class="FooterHeading"><strong>Contact</strong></div>
      <ul class="customlist" style="list-style: none">
      <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><span> <a href="#">Email Ons</a></span></li>
      <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><span> Telefoon: 020-6403036</span></li>
      <li><span class="glyphicon glyphicon-flag" aria-hidden="true"></span><span> Locatie: <a href="/contact/">Klik</a></span></li>
      <li><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span> KvK: 40532325</span></li>
      </ul>
    </div>        
    
    <div class="col-sm-3 col-md-3 whitelink">
     <div class="FooterHeading"><strong>Over Ons</strong></div>
      <ul class="customlist">
      <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span> <a href="/vrienden">Word vriend!</a></span></li>
      <li><span class="glyphicon glyphicon-gift" aria-hidden="true"></span><span> <a href="/sinterklaas">Sinterklaas Op Bezoek</a></span></li>
      <li><span class="glyphicon glyphicon-forward" aria-hidden="true"></span><span> <a href="/gallery">Voorstellingen</a></span></li>
      </ul>
    </div>
    
    <div class="col-sm-3 col-md-3 whitelink">
      <div class="FooterHeading"><strong>Bestuur</strong></div>
      <ul class="customlist">
      <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span> Ron Botman</span></li>
      <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span> Peter Breddels</span></li>
      <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span> Karin Koch</span></li>
      <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span> Petra Dobbeling</span></li>
      <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span> Manuela Ruhe</span></li>
      </ul>
    </div>
    
    <div class="col-sm-3 col-md-3 whitelink">
      <div class="FooterHeading"><strong>Sitemap</strong></div>
      <ul class="customlist">
     <?php
    $root = $pages->get("/");
    $children = $root->children("limit=4");
    $children->prepend($root);
    foreach($children as $child) {
        echo "<li><a href='{$child->url}'>{$child->title}</a></li>";
    }
?>
      </ul>
    </div>
  </div> <!-- close footer row -->


  
  </div> <!-- close footer container -->
  
</footer>

</div>
</body>
</html>