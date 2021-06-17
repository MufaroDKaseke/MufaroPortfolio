<?php

/*

Contact form's code goes in here

To do

1. Put errors in an array the call them when needed

*/
// Check if it is the correct form
if (isset($_REQUEST["form"]) && $_REQUEST["form"] == "contactForm") {
	// Check if all form data is present
	if (isset($_REQUEST["name"]) && 
		isset($_REQUEST["email"]) && 
		isset($_REQUEST["subject"]) &&
		isset($_REQUEST["message"])) {
		
		// Test
		// echo "Validate Test Successful";
			
		// Assign values to ARRAY
		$form = array('full_name' => $_REQUEST['name'] , 'email' => $_REQUEST["email"] , 'subject' => $_REQUEST["subject"] ,  'message' => nl2br($_REQUEST["message"]) );


		require "db_connect.php";

		function insertMessage($conn ,$form){
			$sql = "INSERT INTO messages (full_name, email, subject, message) VALUES ('" . $form["full_name"] . "', '" . $form["email"] . "', '" . $form["subject"] . "', '" . $form["message"] . "')";
			if (mysqli_query($conn ,$sql)) {
				// Success : Your Message  was successfully send.
				echo '<div class="text-center">
						<i class="icon-check-circle-o text-success" style="font-size: 3rem;"></i>
					</div>
					<div class="success-msg">
						<h5 class="text-center my-3">Your message was successfully send...</h5>
						<div class="col text-center">
							<button type="submit" class="btn mufaro-btn my-2" data-dismiss="modal" aria-label="Close">Close</button>
						</div>
					</div>';
			} else {
				// Error : Oops ,an error occured.
				die ('<div class="text-center">
						<i class="icon-error_outline text-danger" style="font-size: 3rem;"></i>
					</div>
					<div class="success-msg">
						<h5 class="text-center my-3">Oops ,an error occured.</h5>
						<div class="col text-center">
							<button type="submit" class="btn mufaro-btn my-2" data-dismiss="modal" aria-label="Close"><i class="icon-refresh"></i> Try Again</button>
						</div>
					</div>');
			}
		}

		insertMessage($conn ,$form);

		mysqli_close($conn);
	} else {
		// Error: Form Data is Missing
		die('<div class="text-center">
						<i class="icon-error_outline text-danger" style="font-size: 3rem;"></i>
					</div>
					<div class="success-msg">
						<h5 class="text-center my-3">Error: Form Data is Missing</h5>
						<div class="col text-center">
							<button type="submit" class="btn mufaro-btn my-2" data-dismiss="modal" aria-label="Close"><i class="icon-refresh"></i> Try Again</button>
						</div>
					</div>');
	}
} else {
	// Error : Invalid Form
	die('<div class="text-center">
						<i class="icon-error_outline text-danger" style="font-size: 3rem;"></i>
					</div>
					<div class="success-msg">
						<h5 class="text-center my-3">Error: Invalid Form</h5>
						<div class="col text-center">
							<button type="submit" class="btn mufaro-btn my-2" data-dismiss="modal" aria-label="Close"><i class="icon-refresh"></i> Try Again</button>
						</div>
					</div>');
}

?>