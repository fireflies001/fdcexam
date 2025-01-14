<?php
    include "../../common/common.php";
    $conn = f_connectdb("localhost", "root", "");
    
    
    $contactname      = $_REQUEST["contactname"];
    $contactemail       = $_REQUEST["contactemail"];
    $contactphone          = $_REQUEST["contactphone"];
    $contactcompany   = $_REQUEST["contactcompany"];
    $editId       = $_REQUEST["editId"];


    $w_master = new contact_users();

    if($w_master->edit_contact($conn, $contactname, $contactemail, $contactphone, $contactcompany, $editId) != 0) {
        echo $w_master;
    }
?>