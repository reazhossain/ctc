<?php

	// grab recaptcha library
	require_once "recaptchalib.php";
	// your secret key
	$secret = "6Lc95xEUAAAAAEL3xINcj-zhpRBGvhReuz5bntrH";	 
	// empty response
	$response = null;			 
	// check secret key
	$reCaptcha = new ReCaptcha($secret);

	// if submitted check response
	if ($_POST["g-recaptcha-response"]) {
		$response = $reCaptcha->verifyResponse(
			$_SERVER["REMOTE_ADDR"],
			$_POST["g-recaptcha-response"]
			);
		}
				
	function died($error) {
		 
		
		?>
		
		<div class="alert alert-danger">
		<strong>There was an error in your message. Please edit it and try again.</strong>
		</div>
		
		<?php
		echo $error."<br />";
		
		
		echo "CTC Connections<br /><br />";
		die();
		}
	
	
	function filterWords($comments){	
	
		////Filter Profanity List from word file
			$wordlist = "banned_words.txt";
			
			foreach( file( $wordlist ) as $word ) {
				$word = trim($word);

				if(stripos($comments,$word)>0){
					
					return true;
					exit();
				}
			}
			return false;
	}
	
	


	if ($response != null && $response->success) {
	?>
	
	<?php
	
	/////Check Form here
		///$email_to = "Joseph.Nganga@ctcconnections.com";
		///$email_to = "sk17ab@gmail.com";
		$email_subject = "CTC Connections Inquiry";
		
		if(!isset($_POST['email']) ||
        !isset($_POST['comment'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
		}
		
		
		$fname = $_POST['fname']; 
		$lname = $_POST['lname']; 
		$contactMeBy = $_POST['contactMeBy']; 
		
		$email_from = $_POST['email']; 
		$phone = $_POST['phone']; 
		$comment = $_POST['comment']; 
		
		
		
		$error_message = "";
		
		///Emails
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
		if(!preg_match($email_exp,$email_from)) {
 
			$error_message .= 'The email address you entered does not appear to be valid.<br />';
		}
		
		//Comment too short
		  if(strlen($comment) < 2) {
			$error_message .= 'The comment you entered is too short.<br />';
		}
		///Filter words
		if(filterWords($comment)){
			$error_message .= 'Check your message for objectionable content.<br />';
		}
		
		///fname, last name, phone empty 
		if(strlen($fname) < 1) {
			$error_message .= 'The First Name is empty<br />';
		}
		if(strlen($lname) < 1) {
			$error_message .= 'The Last Name is empty<br />';
		}
		if(strlen($phone) < 1) {
			$error_message .= 'The Phone Number is empty<br />';
		}
		
		/////$contactMeBy
		
		
		
		  if(strlen($error_message) > 0) {
			died($error_message);
		}
		else{
			
		?> 
			<div class="alert alert-success">
			<strong>Email sent. Thank you for contacting us.</strong> 
			</div>
		<?php
		}
		function clean_string($string) {
 
			$bad = array("content-type","bcc:","to:","cc:","href");
 
			return str_replace($bad,"",$string);
 
		}
		
		
		$email_message .= "Sender Name : ".clean_string($fname)." ";
		$email_message .= "".clean_string($lname)."<br>";
		$email_message .= "Phone Number : ".clean_string($phone)."<br>";
		$email_message .= "Email : ".clean_string($email_from)."<br>";
		$email_message .= "Contact Me By : ".clean_string($contactMeBy)."<br> <br>";
		
		$email_message .= "Comment : <br>".clean_string($comment)."<br>";
		
		// Send email
		require 'mailer/PHPMailerAutoload.php';
		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // enable SMTP
		///$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 587; // or 587
		$mail->IsHTML(true);
		$mail->Username = "CtcConnections.contact@gmail.com";
		$mail->Password = "ctc!@#connections";
		$mail->AddReplyTo("$email_from", "$fname");
		$mail->SetFrom("$email_from", "CTC Connections"); //
		$mail->Subject = "CTC Connections Inquiry";
		$mail->Body = "$email_message";
		
		////$mail->AddAddress("sk17ab@gmail.com"); // send email to this address
		///$mail->AddAddress("support@abaacorp.com"); // send email to this address
		$mail->AddAddress("Joseph.Nganga@ctcconnections.com"); // send email to this address
		
		

		 if(!$mail->Send()) {
			echo "An error occurred submitting your web inquiry. Please submit your inquiry again.";
		 } else {
			echo " ";
		 }
	
		
	} else 
	{
		///Captcha Error
				
	} 
			 
				?>