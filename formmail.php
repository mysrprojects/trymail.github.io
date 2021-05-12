<?php


$name = $_POST["name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

echo $name."\n\n".$mobile."\n\n".$email."\n\n".$subject."\n\n".$message;

if(mail("sanjayrht601@gmail.com",$subject, $message)){
	echo "Mail Sent";
}
else{
	echo "Error Occour";
}


?>