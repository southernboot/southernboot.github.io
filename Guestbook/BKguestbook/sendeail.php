<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Sendemail Script</title>
</head>
<body>

<!-- Reminder: Add the link for the 'next page' (at the bottom) --> 
<!-- Reminder: Change 'YourEmail' to Your real email --> 

<?php
if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,"."))) 
{
echo "<h2>Use Back - Enter valid e-mail</h2>\n"; 
$badinput = "<h2>Feedback was NOT submitted</h2>\n";
echo $badinput;
}
if(empty($visitor) || empty($visitormail) || empty($notes )) {
echo "<h2>Use Back - fill in all fields</h2>\n";
}

$todayis = date("l, F j, Y, g:i a") ;

$attn = $attn ; 
$subject = $attn; 

$notes = stripcslashes($notes); 

$message = " $todayis [EST] \n
Attention: $attn \n
Message: $notes \n 
From: $visitor ($visitormail)\n
Additional Info : IP = $ip \n
Browser Info: $httpagent \n
Spinningdivil_mailbot Referral : $httpref \n
";

$from = "From: $visitormail\r\n";


mail("roger.rosa@free.fr", $subject, $message, $from);

?>

<p align="center">
Date: <?php echo $todayis ?> 
<br />
Thank You : <?php echo $visitor ?> ( <?php echo $visitormail ?> ) 
<br />

Attention: <?php echo $attn ?>
<br /> 
Message:<br /> 
<?php $notesout = str_replace("\r", "<br/>", $notes); 
echo $notesout; ?> 
<br />
<?php echo $ip ?> 

<br /><br />
<br /><br /><br />
Sign in messages will be shortly added after review.
<a href="Guestbook/guestform.php"> Next Page </a> 
</p> 

</body>
</html>
