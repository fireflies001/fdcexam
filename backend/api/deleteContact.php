<?php
    include "../../common/common.php";
    $conn = f_connectdb("localhost", "root", "");
    
    $contactphone          = $_REQUEST["contactphone"];



    $w_master = new contact_users();

    if($w_master->delete_contact($conn, $contactphone) != 0) {
        echo $w_master;
    }
?>