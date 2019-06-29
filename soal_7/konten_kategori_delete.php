<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	deleteData("kategori","id",$id);
	rdt("page_kategori.php");
}
?>