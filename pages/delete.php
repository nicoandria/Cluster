<?php
	require('../inc/model.php'); 
    $client=find(null,"customer",null);
    $condition = " where customer_id='" . $_GET['id'] . "'" ;
    delete("customer",$condition);
    header("Location:index.php");
?>