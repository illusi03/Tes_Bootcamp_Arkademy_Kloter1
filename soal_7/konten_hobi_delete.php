<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	deleteData("hobi","id",$id);
	rdt("page_hobi.php");
}
?>