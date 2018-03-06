<?php
	require('../inc/model.php'); 
    $storeId = $_POST['store'];
    $name = $_POST['name'];
    $firstName = $_POST['firstname'];
    $email = $_POST['email'];
    $aid = $_POST['adressid'];
    $active = $_POST['active'];
    $modif = "store_id='" . $storeId . "',first_name=" . "'" . $firstName . "',last_name=". "'" . $name . "',email=". "'" . $email . "',address_id=". "'" . $aid . "',active=". "'" . $active . "'";
    $condition = " where customer_id='" . $_POST['id'] . "'" ;
    update("customer",$modif,$condition);
    header("Location:index.php");
?>