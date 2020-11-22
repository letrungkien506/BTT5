<!DOCTYPE html>
<html lang= "en">
<head>
  <meta charset= "UTF-8">
  <link rel ="stylesheet" href="style.css">
  <title>Quản lý thành viên</title>
</head>
<body>
   <div class="timkiem">
  <form action= "" method ="GET">
    <table>
	 <tr>
	    <h1> Quản lý thành viên</h1>
		</tr>
		<tr><td><a  href ="index.php?controller=thanh-vien&action=add"title=""Thêm> Thêm thành viên</a></td>
	       </tr>
	 		<tr><td><a  href ="index.php?controller=thanh-vien&action=list"title=""Sửa> Danh sách thành viên </a></td>
            </tr>
				 		<tr><td><a  href ="index.php?controller=thanh-vien&action=tim-kiem"title=""Tìm kiếm> Tìm kiếm thành viên trong danh sách</a></td>
            </tr>
			 
	</table>
	<input type="hidden" name="action" value="tim-kiem">
  </form>  
</div>
<div></div>
<div></div>
</body>
</html>
<?php
include "Model/DBConfig.php";
$db= new Database;
$db->connect();
if(isset($_GET['controller'])){
	$controller= $_GET['controller'];
}
else{
	$controller= '';
}
switch($controller){
	case 'thanh-vien':{
		require_once('Controller/thanhvien/index.php');
	}
}

?>
