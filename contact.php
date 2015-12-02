<?php
$from="";
$to = "x15014657@student.ncirl.ie";
$firstname = Trim(stripslashes($_POST['firstname']));
$lastname = Trim(stripslashes($_POST['lastname']));
$Age = Trim(stripslashes($_POST['Age']));
$option = Trim(stripslashes($_POST['option']));
$other = Trim(stripslashes($_POST['other']));
$comments = Trim(stripslashes($_POST['comments']));

$body ="";
$body .="firstname: ";
$body .=$firstname;
$body .="\n";
$body .="lastname: ";
$body .=$lastname;
$body .="\n";
$body .="Age: ";
$body .=$Age;
$body .="\n";
$body .="option: ";
$body .=$option;
$body .="\n";
$body .="other: ";
$body .=$other;
$body .="\n";
$body .="comments: ";
$body .=$comments;
$body .="\n";


$go = mail($to, $subject, $body, "From:<$from>");

if($go) {
		print("Success!");
}
else{
	print("Unable to Send");
}






?>