<?php
/*$webmasteremail= "t.khode@gmail.com";
$data = $_POST;
$name  = $_POST["name"];
$address  = $_POST["address"];
$mobile  = $_POST["mobile"];
$email  = $_POST["email"];
$services  = $_POST["services"];
$relocation  = $_POST["relocation"];
$fmove  = $_POST["fmove"];
$Tmove  = $_POST["Tmove"];
$requirement  = $_POST["requirement"];


//print_r($data);
$msg="
 --------------------------------------------------------------------------------
Your Sign-in details. 

Name											:- $name 
Address											:- $address  
Phone No. 										:- $mobile  
Email ID 										:- $email  
Select Services									:- $services  
Date of Relocation								:- $relocation  
Moving From 									:- $fmove  
Moving To										:- $Tmove
Specific Requirement							:- $requirement  
-------------------------------------------------------------------------------
";

			$mesheader ="Return-Path: <$email>\n";
			$mesheader .= "From: $email\n";
			$mesheader .= "MIME-Version: 1.0\n";

			@mail($webmasteremail,"New sign details",$msg,$mesheader);
			@mail("t.khode@gmail.com","New sign details",$msg,$mesheader);
########################################################################
//$redirect="Location: thanks.html";
//header($redirect);
//exit;
*/
require("class.phpmailer.php");
 
		//print_r($_POST);
		$name  = $_POST["name"];
		$address  = $_POST["address"];
		$mobile  = $_POST["mobile"];
		$email  = $_POST["email"];
		$services  = $_POST["services"];
		$relocation  = $_POST["relocation"];
		$fmove  = $_POST["fmove"];
		$Tmove  = $_POST["Tmove"];
		$requirement  = $_POST["requirement"];


       $msg = "" ;
	 $msg .= "Name											: $name\n"; 
	$msg .= "Address										: $address\n";  
	$msg .= "Phone No. 										: $mobile\n";  
	$msg .= "Email Id.	 									: $email\n";  
	$msg .= "Select Services								: $services\n";  
	$msg .= "Date of Relocation 							: $relocation\n";  
	$msg .= "Moving From  									: $fmove\n";  
	$msg .= "Moving To 					   					: $Tmove\n";  
	$msg .= "Specific Requirement 							: $requirement\n";  
      $msg .= "  \n"  ;
	  // echo $msg;
     
     $mail = new PHPMailer();
      $mail->IsSMTP(); // Send Mail Via SMTP Server
      $mail->Host = "mail.tirupatibalajicargopackers.com"; // SMTP servers
      $mail->SMTPAuth = true; // Turn on SMTP authentication
      $mail->Username = "donotreplay@tirupatibalajicargopackers.com"; // Use Your Email ID Here
      $mail->Password = "1234567890"; // Use Your Email Password

      $mail->From = "$email";
      $mail->FromName = "Feedback Form Email";
      $mail->AddAddress("info@packersmoversservice.com");
      $mail->Subject = "Feedback Form Email";
      $mail->Body = $msg;

      if(!$mail->Send())
      {
           echo "Message was not sent <p>";
           echo "Mailer Error: " . $mail->ErrorInfo;
			
      }
      else
      {
             //echo "Message has been sent";
			$redirect="Location: thanks.html";
			header($redirect);
			exit;
      }
?>