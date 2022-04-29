<?php 
if ( isset($_POST[ 'submit'])) {
$name = $_post['name'];
$grade = $_post['grade'];
$emailfrom = $_post['email'];
$finalreportcard =$_post['final report card'];
$Bankreceipt = $_post['Bank receipt'];

$mailto = "nahommitiku5509@gmail.com";
$headers = "from: ".$emailfrom;
$txt = "you have received an e-mail from ".$name."\n\n".$Bankreceipt;

mail($mailto, $finalreportcard, $txt, $headers);
header("location: mail.php?mailsend");


}

?>
