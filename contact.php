<?php
$pageTitle = 'Contact us';
$pageId = 'contacts';
?>


<?php include 'incl/header.php'?>
<div id="contact">
	<div class="wra">

	<h1>Contact us Now</h1>
	
	<div class="clear">
		<form>
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" placeholder="Name">
			</div>
    	
  		<div class="form-group">
				<label for="mail">Email:</label>
				<input type="email" class="form-control" id="mail" placeholder="Email">
			</div> 	
  	
  		<div class="form-group">
				<textarea  class="form-group" name="textarea" rows= "10" cols="40" placeholder="Write your message here"></textarea>
				
			<input class="btn btn-default" type="submit" value="Send">
			</div>
			
		</form>
	
		
		<section>
			<p>You can also mail us for any thoughts or ideas, we will reply as fast as we can.</p>
		<address>
			<a href="mailto:info@nifty.com">Mail us here</a>
		</address>

			<p>Visit us at: </p>
			<p><strong>Birger Jarlsgatan 57, 111 37 Stockholm</strong></p>
	</section>
	</div>
	</div>
</div>

	


<?php include 'incl/footer.php'?>