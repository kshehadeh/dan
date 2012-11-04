<?php


$EmailFrom = "dan@dantrachtman.com";
//$EmailFrom = "karim.shehadeh@gmail.com";

$Name = trim(stripslashes($_POST['name']));

$Email = trim(stripslashes($_POST['email']));

$Subject = "Email from dantrachtman.com";

$Comments = trim(stripslashes($_POST['comments']));

// prepare email body text
$Body = <<<EOT
    Name: $Name
    Email: $Email
    Comments: $Comments
EOT;

// send email 
$success = mail($EmailFrom, $Subject,$Body, "From: <$EmailFrom>");

echo json_encode(array("success"=>$success));

?>