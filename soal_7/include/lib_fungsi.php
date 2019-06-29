<?php
include 'koneksi.php';
function getAll(){
	$data = array();
	$sql = "SELECT nama.id, nama.name as nama, hobi.name as hobi, kategori.name as kategori FROM hobi
	INNER JOIN nama ON nama.id_hobby = hobi.id
	INNER JOIN kategori ON kategori.id = hobi.id_kategori ORDER BY nama.id DESC";
	$hasil = DBMS::$kon->query($sql);
	while($x = $hasil->fetch_assoc()){
		if($x <> NULL)
			array_unshift($data,$x);
	}
	return $data;
}
function getUserWhere($id){
	$data = array();
	$sql = "SELECT * FROM nama WHERE id=$id";
	$hasil = DBMS::$kon->query($sql);
	while($x = $hasil->fetch_assoc()){
		if($x <> NULL)
			array_unshift($data,$x);
	}
	return $data = $data[0];
}
function getAllHobby(){
	$data = array();
	$sql = "SELECT hobi.id, hobi.name, kategori.name as kategori FROM hobi
	INNER JOIN kategori ON kategori.id = hobi.id_kategori ORDER BY hobi.id DESC";
	$hasil = DBMS::$kon->query($sql);
	while($x = $hasil->fetch_assoc()){
		if($x <> NULL)
			array_unshift($data,$x);
	}
	return $data;
}
function getAllKategori(){
	$data = array();
	$sql = "SELECT * FROM kategori ORDER BY id DESC";
	$hasil = DBMS::$kon->query($sql);
	while($x = $hasil->fetch_assoc()){
		if($x <> NULL)
			array_unshift($data,$x);
	}
	return $data;
}
function addUser($name,$id_hobi){
	$sql = "INSERT INTO nama (name,id_hobby) VALUES ('$name',$id_hobi)";
	$hasil = DBMS::$kon->query($sql);
	return $hasil;
}
function editUser($id,$name,$id_hobi){
	$sql = "UPDATE nama SET name='$name', id_hobby=$id_hobi WHERE id=$id";
	$hasil = DBMS::$kon->query($sql);
	return $hasil;
}
function addHobi($name,$id_kategori){
	$sql = "INSERT INTO hobi (name,id_kategori) VALUES ('$name',$id_kategori)";
	$hasil = DBMS::$kon->query($sql);
	return $hasil;
}
function editHobi($id,$name,$id_kategori){
	$sql = "UPDATE hobi SET name='$name', id_kategori=$id_kategori WHERE id=$id";
	$hasil = DBMS::$kon->query($sql);
	return $hasil;
}
function addKategori($name){
	$sql = "INSERT INTO kategori (name) VALUES ('$name')";
	$hasil = DBMS::$kon->query($sql);
	return $hasil;
}
function editKategori($id,$name){
	$sql = "UPDATE kategori SET name='$name' WHERE id=$id";
	$hasil = DBMS::$kon->query($sql);
	return $hasil;
}

//Umum
function deleteData($tbl,$kolom,$id){
	$data = array();
	$sql = "DELETE FROM $tbl WHERE $kolom='$id'";
	$hasil = DBMS::$kon->query($sql);
	return $hasil;
}
function getWhere($tbl,$kolom,$id){
	$data = array();
	$sql = "SELECT * FROM $tbl WHERE $kolom=$id ORDER BY id DESC";
	$hasil = DBMS::$kon->query($sql);
	while($x = $hasil->fetch_assoc()){
		if($x <> NULL)
			array_unshift($data,$x);
	}
	return $data = $data[0];
}
?>