<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Quan ly thanh vien</title>
</head>
<body>
	<a href="?controller=thanh-vien&action=list">Danh sach</a>
		<a href="?controller=thanh-vien&action=add">Them moi</a>

</body>
</html>

<?php
	include "Model/DB.php";
	$db = new Database;
	$db->connect();

	if(	isset($_GET['controller']))	{
		$controller = $_GET['controller'];
	}else{
		$controller = '';
	}

	switch($controller){
		case 'thanh-vien':
			# code...
		require_once('Controller/thanhvien/index.php');
			
	}
?>