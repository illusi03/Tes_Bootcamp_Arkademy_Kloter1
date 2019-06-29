<?php
include "include/lib_fungsi.php";
if(isset($_POST['btnSubmit'])){
	$id = $_POST['id_user'];
	$name = $_POST['name'];
	$id_hobi = $_POST['hobi'];
	if(editUser($id,$name,$id_hobi)){
		rdt("index.php");
	}
}
?>