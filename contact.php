<?php

$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$msg = $_POST['msg'];
$security = $_POST['security'];

$to = "wayne@web2dezine.com";

$subject = "New Contact form Submission";

$msg = "A new client is contacting Am2Pm-PT.\n\nName: $name\n\nEmail: $email\n\nTel: $tel\n\nMessage: $msg\n\nSecurity: $security\n\nPlease respond asap possible";

if ($security=="10") {
	mail($to,$subject,$msg);
	header("Location:index.php?s=1");
}
else {
	header("Location:index.php?s=2");
}


?>
