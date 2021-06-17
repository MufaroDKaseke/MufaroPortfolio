<?php


/*

Request Qoutation's form code goes in here

To do

1. Put errors in an array the call them when needed

*/

if(isset($_REQUEST["form"]) && $_REQUEST["form"] == "hireMeForm") {
	if (isset($_REQUEST["name"]) &&
		isset($_REQUEST["email"]) &&
		isset($_REQUEST["phoneNumber"]) &&
		isset($_REQUEST["message"])) {
		
		// echo "Vaidation Successful ,all form data present";

		$form = array("full_name" => $_REQUEST["name"], "email" => $_REQUEST["email"], "phone_number" => $_REQUEST["phoneNumber"], "message" => nl2br($_REQUEST["message"]));

		require "db_connect.php";

		function insertQuoteReq($conn ,$form){
			$sql = "INSERT INTO quote_request (full_name, email, phone_number, message) VALUES ('" . $form["full_name"] . "', '" . $form["email"] . "', '" . $form["phone_number"] . "', '" . $form["message"] . "')";
			if (mysqli_query($conn ,$sql)) {
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
				die('<div class="text-center">
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

		insertQuoteReq($conn ,$form);
		mysqli_close($conn);

	} else {
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