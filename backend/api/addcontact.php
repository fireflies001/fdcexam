<?php
    include "../../common/common.php";
    $conn = f_connectdb("localhost", "root", "");
    
    
    $contactname      = $_REQUEST["contactname"];
    $contactemail       = $_REQUEST["contactemail"];
    $contactphone          = $_REQUEST["contactphone"];
    $contactcompany   = $_REQUEST["contactcompany"];
    $loggedEmail       = $_REQUEST["loggedEmail"];


    $w_master = new contact_users();

    if($w_master->add_contact($conn, $contactname,$contactemail, $contactphone, $contactcompany, $loggedEmail) != 0) {
        echo $w_master;
    }
?>