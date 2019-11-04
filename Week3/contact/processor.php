<?php
$to=$_POST['email'];
$subject="website Test";
$txt=$POST['message'];
$headers="from:noreply@robertlatus.com";
mail($to,$subject,$txt,$headers);
echo 'email sent';

