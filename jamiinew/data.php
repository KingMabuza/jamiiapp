<?php


require('./Config/config.php');


extract($_POST);


//$sql = "INSERT into contactus (name,email,organization,subject,message,date_created) VALUES('" . $name . "','" . $email . "','" . $organization . "','" . $subject . "','" . $message . "','" . date('Y-m-d H:i:s') . "')";


//$success = $conn->query($sql);

use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['message'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "afcftajamii@gmail.com";
        $mail->Password = 'Thisisthegroup7password';
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress($email);
        $mail->addAddress("afcftajamii@gmail.com");
        $mail->Subject = $subject;
        $mail->Body = $message;
        if ($mail->send()) {
            echo '<script type="text/javascript">'; 
            echo 'alert("Thank you for Contacting us We have sent you an email");'; 
            echo 'window.location.href = "index.php";';
            echo '</script>';
           //echo $status = "success";
           //echo $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
$conn->close();