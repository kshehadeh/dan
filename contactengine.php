<?php


$EmailTo = "dan@dantrachtman.com";

$Name = Trim(stripslashes($_POST['Name'])); 

$EmailFrom = Trim(stripslashes($_POST['EmailFrom']));

$Subject = "Email from dantrachtman.com";

$Comments = Trim(stripslashes($_POST['Comments'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";

$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";

$Body .= "EmailFrom: ";
$Body .= $EmailFrom;
$Body .= "\n";

$Body .= "Comments: ";
$Body .= $Comments;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Name, $Comments, $Subject, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>