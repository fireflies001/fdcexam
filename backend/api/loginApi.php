<?php
    include "../../common/common.php";
    $conn = f_connectdb("localhost", "root", "");
    session_start();

    $email          = $_REQUEST["email"];
    $password       = $_REQUEST["password"];


    $w_master = new contact_users();

    if($w_master->retrieve_user($conn,$email, $password) != 0) {
        echo $w_master;
    }
?>