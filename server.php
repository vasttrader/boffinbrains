<?php
    $name = isset($_POST["name"]) ? trim($_POST["name"]) : '';
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : '';
    $services = isset($_POST["services"]) ? trim($_POST["services"]) : '';
    $message = isset($_POST["message"]) ? trim($_POST["message"]) : '';
    $subject = isset($_POST["subject"]) ? trim($_POST["subject"]) : '';

    if($name && $email && $message) {
        setcookie("success", "Thank you for contacting us!", time() + "10", "/");
        if(isset($_SERVER['HTTP_REFERER'])) {
            header('Location: ' . $_SERVER['HTTP_REFERER']."#enquiryForm");
        }else{
            header('Location: ' . "error.php");
        }
    }else{
        setcookie("error", "Please fill details correctly!", time() + "10", "/");
        if(isset($_SERVER['HTTP_REFERER'])) {
            header('Location: ' . $_SERVER['HTTP_REFERER']."#enquiryForm");
        }else{
            header('Location: ' . "error.php");
        }
    }
