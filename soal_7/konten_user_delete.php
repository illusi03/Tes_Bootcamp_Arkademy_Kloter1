<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	deleteData("nama","id",$id);
	rdt("index.php");
}
?>