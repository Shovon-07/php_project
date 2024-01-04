<?php
$to = 'mman35230@gmail.com';
$msg = 'Password recover : ';
$body = 'OTP = 123';
$header = 'From: abedinraj@gmail.com';

if(mail($to,$msg,$body,$header)) {
    echo "<script>alert('Send succeded')</script>";
} else {
    echo "<script>alert('Failed email send')</script>";
}



?>