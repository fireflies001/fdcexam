<?php
    include "../../common/common.php";
    $conn = f_connectdb("localhost", "root", "");
    
    
    $contactId      = $_REQUEST["contactId"];



    $w_master = new contact_users();

    if($w_master->get_individual_contact($conn, $contactId) != 0) {
        echo $w_master;
    }
?>