<?php


    $msg = $_GET['msg'];
    $fp=fopen('chatlist','a');
    $data=$msg."<br>\n";
    fwrite($fp,$data);
    fclose($fp);





header('location:index.php');

?>