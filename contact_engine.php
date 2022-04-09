<?php

if  (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

$mailTo = "postmaster@prokletyklub.cz";
$headers = "From my website";

mail($mailTo, $email, $message, $headers);
header("Location: contact.php?mailsend");

}