<?php
//MAMP cần pass là root
    $connect = mysqli_connect('localhost','root','root','sport') or die('không thể liên kết');
    mysqli_query($connect,"SET NAMES 'utf8'");
?>