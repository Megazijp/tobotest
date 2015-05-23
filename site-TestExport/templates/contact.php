<?php 
  include("./basic-page.php"); 
  include("./news_functions.inc");
  ?>

<div class="container content">
	<div class="row">
    <div class="col-md-9">
      <h1>Contact</h1>
      <hr>
      <div class="panel panel-default" style="max-width:720px;">
          <div class="panel-heading">
            <h3 class="panel-title"><b>Contactformulier</b></h3>
          </div>
          <div class="panel-body">
    

          

           <form id="FinanceForm" name="FinanceForm" class="form-horizontal" role="form" style="" method="post" action="#">
            <div class="form-group">
              <label for="naam" class="col-sm-2 control-label">Uw naam:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="naam" placeholder="Naam" required="required">
              </div>
            </div>
             <div class="form-group">
              <label for="naam" class="col-sm-2 control-label">Email:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required="required">
              </div>
            </div>
            <div class="form-group">
              <label for="telefoon" class="col-sm-2 control-label">Telefoon:</label>
              <div class="col-sm-10">
                <input type="tel" class="form-control" id="phone" name="Phone" placeholder="Telefoonnummer">
              </div>
            </div>
			<div class="form-group">
              <label for="message" class="col-sm-2 control-label">Bericht:</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="3" id="message" name="bericht"></textarea>
              </div>
            </div>
            <div class="form-group">
            <label for="Submit" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
            <button id="Inputfield_submit" class="ui-button ui-widget ui-state-default ui-corner-all pull-right" name="submit" value="Submit" type="submit"><span class="btn ui-button-text">Verstuur</span></button>
            </div>
            </div>
            </form>           
           
 
   </div>
</div>
    </div>

      <div class="col-md-3">



<h3>Locatie</h3>
            
            <div style="font-weight:bold; margin-top:10px;">Toneelgroep TOBO</div>
            <div>Bertha von Suttnerlaan 204</div>
            <div>1187 TA  Amstelveen</div>
            <div>020-6403036</div>
            <div>KvK: 40532325</div>
            
            <style>
              #map-canvas {
                width: 300px;
                height: 300px;
              }
            </style>
            <br>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2440.9957572241988!2d4.843941999999994!3d52.279779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5e01913e472f9%3A0xdb55ee14f1474fda!2sToneelgroep+%22Tobo%22!5e0!3m2!1snl!2snl!4v1423471704049" width="300" height="300" frameborder="0" style="border:0"></iframe>

         </div>
    </div>
		</div>
		
		
		<script>
		  //form submit
    	$("#Inputfield_submit").click(function() {
    	  var name = $("#name").val();
    		var email = $("#email").val();
    		var phone = $("#phone").val();
    		var message = $("#message").val();
    		if (name === "") {
    			alert("Please enter a valid name!");
    		}	else if(email === "") {
    			alert("Please enter a valid email address!");
    		} else if (phone === "") {
    			alert("Please enter a phone!");
    		} else if (message === "") {
    			alert("Please enter a message!");
    		} else {
    			var mailData = "email=" + email + "&subject=" + name + "&message=" + message;
    			$.ajax({
    				type: "POST",
    				url: "http://cms-davidruhe-5.c9.io/contact.php",
    				data: mailData,
    				success: function() {
    					alert("Mails has been send!");
    				},
    				error: function() {
    					alert("There was an error sending your mail, please try again later!");
    				}
    			});
    		}
    	});
		</script>
<?php 
  include("./footer.php"); 
  ?>
  

