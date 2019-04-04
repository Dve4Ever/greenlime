<?php
 
$target = $_GET['target'];
$subject = $_GET['subject'];
$message = $_GET['message'];
$sender = $_GET['sender'];
$amount = $_GET['amount'];
$headers = "From: $sender";
 
for($i=1;$i<=$amount;$i++)
{
    mail($target,$subject,$message,$headers);
}
 
echo "Successfully sent $amount email(s) to $target";
 
?>