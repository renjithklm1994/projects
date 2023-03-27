<?php
include('helper.php');
session_start();
$option=$_REQUEST['opt'];
switch($option)
{
    case 1:
            $email=$_REQUEST['txtEmail'];
            $pass=$_REQUEST['txtPass'];
            //echo $email." ".$pass;
            if(login_check($email,$pass))
            {
                
                $_SESSION['login_status']=1;
                $_SESSION['user_email']=$email;
                header('Location:expence.php');
            }
            else
            {
                $_SESSION['message']='Invalid Login';
                header('Location:index.php');
            }
            break;
    case 2:
            $name=$_REQUEST['txtName'];
            $mobile=$_REQUEST['txtMobile'];
            $email=$_REQUEST['txtEmail'];
            $pass=$_REQUEST['txtPass'];
            $confirm=$_REQUEST['txtConfirm'];
            echo $name." ".$mobile." ".$email." ".$pass." ".$confirm;
            break;
    case 3:
            //Expence Entry
            $cid=$_SESSION['userDetails']['cid'];
            $expence_title=$_REQUEST['txtTitle'];
            $expence_amount=$_REQUEST['txtAmount'];
            //echo $expence_title." ".$expence_amount." ".$cid;
            if(expence_entry($expence_title,$expence_amount,$cid))
            {
                header('Location:expence.php');
            }
            else{
                header('Location:expence.php');
            }
            break;
    case 4:
           session_unset();
           header('Location:index.php');
           break;
    
    default:
            echo "Error";
}
?>