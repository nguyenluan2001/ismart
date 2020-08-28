<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
header('Content-Type: text/html; charset=utf-8');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
function sendMail($receipt,$fullname,$title,$content,$option=array())
{
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'ntluan0301@gmail.com';                     // SMTP username
        $mail->Password   = 'ntluan20032001';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;
        $mail->CharSet = 'UTF-8';                               // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('ntluan0301@gmail.com', 'Luân');
        $mail->addAddress($receipt, $fullname);     // Add a recipient
        // $mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('ntluan0301@gmail.com', 'Luân');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
    
        // Attachments
        // $mail->addAttachment('download.png');         // Add attachments
        // $mail->addAttachment('download.png', 'picture.jpg');    // Optional name
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $title;
        $mail->Body    = $content;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Đã gửi thành công';
    } catch (Exception $e) {
        echo "Gửi không thành công. Thông báo lỗi: {$mail->ErrorInfo}";
    }
    print_r($_POST);
}

?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="ckeditor/ckeditor.js"></script>
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="receipt">Người nhận</label>
        <input type="text" name="receipt" id="receipt"><br>
        <label for="title">Chủ đề</label>
        <input type="text" name="title" id="title"><br>
        <label for="content">Nội dung</label>
      <textarea name="content" class="ckeditor" id="" cols="30" rows="10"></textarea>
        <input type="submit" name="btn-send">
    </form>
</body>

</html> -->