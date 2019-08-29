<?php
if(isset($_POST['reset-request-submit'])){
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    $url = "letsrise.ml/createnewpassword.php?selector=".$selector."&validator=".bin2hex($token);
    $expires = date("U")+1200;
    require 'dbh.inc.php';
    $userEmail = $_POST["email"];
    $sql = "delete from pwdreset where pwdResetEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "There was an error.";
    }else{
        mysqli_stmt_bind_param($stmt,"s",$userEmail);
        mysqli_stmt_execute($stmt);
    }
    $sql = "insert into pwdreset(pwdResetEmail,pwdResetSelector,pwdResetToken,pwdResetExpires) values(?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "There was an error.";
    }else{
        $hashedToken = password_hash($token,PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt,"ssss",$userEmail,$selector,$hashedToken,$expires);
        mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    $to = $userEmail;
    $subject = "Reset your password for LetsRise";
    $message = '<p>We recieved a password reset request.The link to reset your passqord is given below
                .If you did not make this request please ignore this email.</p>';
    $message .= '<p>Password to reset your link is given below.<br>';
    $message .=  '<a href="'.$url.'">'.$url.'</a></p>';
    $headers = "From: LetsRise <brarjazzy36@gmail.com>\r\n";
    $headers .= "Reply-To: brarjazzy36@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to,$subject,$message,$headers);

    header("Location: ../resetpassword.php?reset=success");
    exit();

}else{
    header("Location: ../index.php");
    exit();
}