<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = $email;

$message = "From:$name <br />" . $message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: ParakKarakah.com <noreply@yourwebsite.com>' . "\r\n" . 'Reply-To: ' . $name . ' <' . $email . '>' . "\r\n";
$headers .= 'Cc: egovaflavia@gmail.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to, $subject, $message, $headers);
if (@mail) {
    echo "<script>alert('Email Terkirim');
    window.location='../index.php?page=home';
    </script>";
}
