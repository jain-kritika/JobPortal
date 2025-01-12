<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $name=$_POST["name"]
    $email=$_POST["email"]
    $message=$_POST["message"]

    $to="kritika4j@gmail.com"
    $subject="New Contact form Submission"
    $headers="From: ".$name . " <" . $email . ">\r\n";
    $headers.="Reply-To: ".$email . "\r\n";
    $headers .= "Content-Type: text/plain;
    charset=utf-8\r\n";
    if(mail($to,$subject,$message,$headers)){
        http_response_code(200);
        echo "email sent successfully";
    }
    else {
        http_response_code(500);
        echo"oops! something wrong";
    }
}
else{
    http_response_code(403)
    echo"access denied"
}
?>