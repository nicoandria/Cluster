<?php
	require("connexion.php");
	function find($colonne,$table,$condition){
		try{
		$x=0;
		$con=dbconnect();
		if($colonne==null){
			$colonne="*";
		}
		//echo("SELECT $colonne from $table $condition");
		$resultat=$con-> query("SELECT $colonne from $table $condition");
		$resultat->setFetchMode(PDO::FETCH_NUM);
		while ($get = $resultat->fetch()) {
        	$result[]=$get;
        	$x++;
    	}
    	if($x==0){
    		return;
    	}
    	$resultat->closeCursor();
    	return $result;
   		}
   		catch (Exception $e) {
   			echo $e.getMessage();	
   		}
	}
	function insert($table,$insertion){
		$con=dbconnect();
		//echo "INSERT into $table values ($insertion)";
		$con->exec("INSERT into $table values($insertion)");
	}
	function update($table,$modif,$condition){
		$con=dbconnect();
		//echo "UPDATE $table set $modif $condition";
		$con->exec("UPDATE $table set $modif $condition");
	}
	function deleteLastRow($table,$attribut){
		$con=dbconnect();
		$con->exec("DELETE  FROM $table ORDER BY $attribut desc LIMIT 1");
	}
	function delete($table,$condition){
		$con=dbconnect();
		//echo "DELETE  FROM $table $conditionj";
		$con->exec("DELETE  FROM $table $condition");
	}
?>