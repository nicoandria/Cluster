<?php
	require('../inc/model.php'); 
    $client=find(null,"customer",null);
    $nbrClient = count($client)+1;
    $storeId = $_POST['store'];
    $name = $_POST['name'];
    $firstName = $_POST['firstname'];
    $email = $_POST['email'];
    $aid = $_POST['adressid'];
    $active = $_POST['active'];
    $date = "2017-04-11";
    $dateUpdate = "2017-04-11";
    $insertion = "'" . $nbrClient . "'," . "'" . $storeId . "'," . "'" . $firstName . "',". "'" . $name . "',". "'" . $email . "',". "'" . $aid . "',". "'" . $active . "',". "'" . $date . "',". "'" . $dateUpdate . "'";
    insert("customer",$insertion);
    header("Location:index.php");
?>