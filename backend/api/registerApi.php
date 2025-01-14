<?php
    include "../../common/common.php";
    $conn = f_connectdb("localhost", "root", "");
    
    
    $name           = $_REQUEST["name"];
    $email          = $_REQUEST["email"];
    $password       = $_REQUEST["password"];


    $w_master = new contact_users();
    $hash = password_hash($password, PASSWORD_DEFAULT);
    if($w_master->insert_user($conn,$name,$email,$hash) != 0) {
        echo "1";
    }else {
        echo "0";
    }
?>