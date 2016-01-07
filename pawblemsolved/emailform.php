<?php
$name = htmlspecialchars($_POST["client_name"]);
$email = htmlspecialchars($_POST["client_email"]);
$phone = htmlspecialchars($_POST["phone"]);
$addy = htmlspecialchars($_POST["address"]);
$startdate = htmlspecialchars($_POST["startdate"]);
$enddate = htmlspecialchars($_POST["enddate"]);
$dogcount = htmlspecialchars($_POST["dogcount"]);
$catcount = htmlspecialchars($_POST["catcount"]);
$comments = htmlspecialchars($_POST["comments"]);
$whorefer = htmlspecialchars($_POST["whorefer"]);

$emailBody = "
A new client has requested a date!

Client Name:  $name
Email: $email
Phone: $phone
Address: $addy
Start Date: $startdate
End Date: $enddate
Dog Count: $dogcount
Cat Count: $catcount
How did you hear about us: $whorefer
Comments: $comments
";

$to = "info@pawblemsolved.com";
$subj = "New Client Requested a Date";
$headers = "From: info@pawblemsolved.com";

echo mail($to, $subj, $emailBody, $headers)
?>