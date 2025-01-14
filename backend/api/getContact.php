<?php
    include "../../common/common.php";
    $conn = f_connectdb("localhost", "root", "");
    
    $email          = $_REQUEST["loggedEmail"];


    $w_master = new contact_users();

    if($w_master->retrieve_contact($conn,$email) != 0) {
        echo $w_master;
    }
?>