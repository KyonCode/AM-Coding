<?php

if  (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

$mailTo = "postmaster@prokletyklub.cz";
$headers = "From my website";

mail($mailTo, $subject, $message, $headers);
header("Location: contact.php?mailsend");

}