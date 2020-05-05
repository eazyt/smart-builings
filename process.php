<?php
if(isset($_POST['email'])){
    // Email info
    $admin_email = "ramohlalen@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // send email
    mail:($admin_email, "New Form Submission", $message . ' - ' . $phone, "From:" . $email);
    header('Location: http:My_Web_Addres');
}