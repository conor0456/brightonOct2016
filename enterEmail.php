<?php 
$emailList="conor0456@gmail.com";


$email="";
$name="";

if(!empty($_POST["email"]))
{
	$email=$_POST["email"];
}
if(!empty($_POST["name"]))
{
	$name=$_POST["name"];
}

if($name!="")
{
	mail("$emailList","User Contact","Name: $name \nEmail: $email");
}
else
{
	mail($emailList,"User Contact","Email: $email");
}

$myfile = fopen("emails.txt", "a") or die("Unable to open file!");
fwrite($myfile, $email."\n");
fclose($myfile);
echo "This is the email: $email";
?> 