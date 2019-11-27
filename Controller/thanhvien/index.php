<?php

	if(	isset($_GET['action'])){
		$action = $_GET['action'];
	}else{
		$action = '';
	}
	$thanhcong = array();

	switch($action){
		case 'add':{
			if(isset($_POST['add_user'])){
				$hoten = $_POST['hoten'];
				$namsinh = $_POST['namsinh'];
				$quequan = $_POST['quequan'];
				if($db->InsertData($hoten,$namsinh,$quequan)){
					$thanhcong[] = 'add_success';
				}
				
			}
			require_once('View/thanhvien/add_user.php');
		break;
			# code...
		}
		case 'list':
			# code...
			$tbltable = 'student';
			$data =  $db->getAllData($tbltable);
			require_once('View/thanhvien/list.php');
			break;

		case 'tim-kiem':
			# code...
			if(isset($_GET['tukhoa'])){
				$key = $_GET['tukhoa'];
				$tbl = 'student';
				$data_search = $db->SearchData($tbl,$key);
			}
			require_once('View/thanhvien/search_user.php');
			break;	
		default:{
			require_once('View/thanhvien/list.php');
			break;
		}

		
	}
?>