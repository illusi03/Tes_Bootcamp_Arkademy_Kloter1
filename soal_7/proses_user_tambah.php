<?php
include "include/lib_fungsi.php";
if(isset($_POST['btnSubmit'])){
	$name = $_POST['name'];
	$id_hobi = $_POST['hobi'];
	if(addUser($name,$id_hobi)){
		rdt("index.php");
	}
}
?>