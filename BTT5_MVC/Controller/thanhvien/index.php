<?php
 // include "Model/DBConfig.php";
if(isset($_GET['action'])){
	$action= $_GET['action'];
}
else{
	$action= '';
}
$thanhcong= array();
switch($action){
	case 'add':{
		if(isset($_POST['add_user'])){
			$hoten= $_POST['hoten'];
			$namsinh= $_POST['namsinh'];
			$quequan= $_POST['quequan'];
			if($db->InsertData($hoten, $namsinh, $quequan)){
				$thanhcong[]='add_success';}
		}
		require_once('View/thanhvien/add_user.php');
		break;
	}
	case 'edit':{
		if(isset($_GET['id'])){
			$id= $_GET['id'];
			$tblTable="thanhvien";
		    $dataID= $db->getDataID($tblTable, $id);
			
			if(isset($_POST['update_user'])){
                 //lấy dữ liệu từ View
				$hoten= $_POST['hoten'];
				$namsinh= $_POST['namsinh'];
				$quequan= $_POST['quequan'];
				//truyền dữ liệu sang model
				if($db->UpdateData($id, $hoten, $namsinh, $quequan)){
					header('location: index.php?controller=thanh-vien&action=list');
				}
			}
		}
		require_once('View/thanhvien/edit_user.php');
		break;
	}
	case 'list':{
		$tblTable="thanhvien";
		$data= $db->getAllData($tblTable);
		require_once('View/thanhvien/list.php');
		break;
	}
	case 'delete':{
		if(isset($_GET['id'])){
			$id= $_GET['id'];
			$tblTable="thanhvien";
			if($db->Delete($id, $tblTable)){
				header('location:index.php?controller=thanh-vien&action=list');
			}
			else{
				header('location:index.php?controller=thanh-vien&action=list');
			}
		}
		// require_once('View/thanhvien/delete_user.php');
		break;
	}
case 'tim-kiem':{
	if(isset($_GET['tukhoa'])){
		$key=$_GET['tukhoa'];
		$tblTable="thanhvien";
		// lấy dữ liệu từ Model
		$data_Search= $db->SearchData($tblTable, $key);
	}
	require_once('View/thanhvien/search_user.php');
	break;
}
	default:{
		require_once('View/thanhvien/list_user.php');
		break;
	}
}
?>