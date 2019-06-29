<?php
class DBMS{
	public static $host = "localhost";
	public static $user = "root";
	public static $pass = "";
	public static $db = "db_arkademy";
	public static $kon = NULL;
}
try{
	DBMS::$kon = new mysqli(DBMS::$host,DBMS::$user,DBMS::$pass,DBMS::$db);
}catch(Exception $e){
}
function rdt($link){
	echo "<script>window.location='$link'</script>";
}
?>