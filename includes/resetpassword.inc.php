<?php
if(isset($_POST['resetpassword'])){
    $selector = $_POST['selector'];
    $validator = $_POST['validator'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if(empty($selector) || empty($validator)){
        header("Location: ../createnewpassword.php?newpwd=error");
        exit();
    }elseif($password != $passwordRepeat){
        header("Location: ../createnewpassword.php?newpwd=matcherror");
        exit();
    }
    $currentDate = date("U");
    require 'dbh.inc.php';
    $sql = "select * from pwdreset where pwdResetSelector=? AND pwdResetExpires > ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "There was an error_1.";
    }else{
        mysqli_stmt_bind_param($stmt,"ss",$selector,$currentDate);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if(!$row = mysqli_fetch_assoc($result)){
            echo "you need to re-submit your request_1";
            exit();
        }else{
            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin,$row['pwdResetToken']);
            if($tokenCheck==FALSE){
                echo "you need to re-submit your request_2";
                exit();
            }elseif($tokenCheck==TRUE){
                $tokenEmail = $row['pwdResetEmail'];
                $sql = "select * from users where email = ?; ";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    echo "There was an error_2.";
                }else{
                    mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
                    mysqli_stmt_execute($stmt);
            
                    $result = mysqli_stmt_get_result($stmt);
                    if(!$row = mysqli_fetch_assoc($result)){
                        header("Location: ../signin.php?user=nouser");
                        exit();
                    }else{
                        $uname=$row['uname'];
                        $sql = "update users set pwd=? where email=?;";
                        $stmt = mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt,$sql)){
                            echo "There was an error_3.";
                        }else{
                            $hashedpwd=password_hash($password,PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt,"ss",$hashedpwd,$tokenEmail);
                            mysqli_stmt_execute($stmt);
                           
                            $sql="delete from pwdreset where pwdResetEmail=?;";
                            $stmt = mysqli_stmt_init($conn);
                            if(!mysqli_stmt_prepare($stmt,$sql)){
                                echo "There was an error_4.";
                            }else{
                                mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
                                mysqli_stmt_execute($stmt);
                                session_start();
                                $_SESSION['uid']=$uname;
                               
                                header("Location: ..\index.php?success=newpwd");
                                exit();
                            }
                        }
                    }
                }
            }else{
                echo "you need to re-submit your request_0";
                exit();
            }
        }
    }
    mysqli_close($conn);

}else{
    header("Location: ../index.php");
    exit();
}