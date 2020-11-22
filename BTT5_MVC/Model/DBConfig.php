<?php
class Database {
	private $hostname = 'localhost';
	private $username = 'root';
	private $pass = '';
	private $dbname= 'quanlythanhvien_mvc1';
	private $conn =NULL;
	private $result = NULL;
	 
	public  function connect(){
		$this->conn = new  mysqli( $this->hostname, $this->username, $this->pass, $this->dbname);
		if(!$this->conn){
			echo "Kết nối thất bại";
			exit();
		}
		else{
			mysqli_set_charset($this->conn, 'utf8');
		}
		return $this-> conn;
	}
	public  function execute($sql) {
		$this->result= $this->conn-> query($sql);
		return $this->result;
	}
	//method lấy dữ liệu
	public function getData(){
		if($this->result){
			$data= mysqli_fetch_array($this->result);
		}
		else{
			$data= 0;
		}
		return $data;
	}
	//method lấy toàn bộ dữ liệu
	public function getAllData($table){
		
		$sql= "SELECT * FROM $table";
		$this->execute($sql);
		if($this->num_rows()==0){
			$data=0;
		}
		else{
			while($datas= $this->getData()){
				$data[]= $datas;
			}
		}
		return $data;
	}
	//method lấy dữ liệu cần sửa theo id
	public function getDataID	($table, $id){
		$sql="SELECT * FROM $table WHERE id= '$id'";
		$this->execute($sql);
		if($this->num_rows()!=0){
			$data= mysqli_fetch_array($this->result);
		}
		else{
			$data= 0;
		}
		return $data;
	}
	// method tính số hàng dữ liệu
public function num_rows(){
	if($this->result){
		$num= mysqli_num_rows($this->result);
	}
	else{
		$num=0;
	}
	return $num;
}
	// method thêm dữ liệu
	public function InsertData($hoten, $namsinh, $quequan){
		$sql =  " INSERT INTO  thanhvien(id, hoten, namsinh, quequan)VALUES(null, '$hoten', '$namsinh','$quequan')";
		return $this->execute($sql);
	}
	//method sửa dữ liệu
	public function UpdateData($id, $hoten, $namsinh, $quequan){
		$sql= "UPDATE thanhvien SET hoten= '$hoten', namsinh= '$namsinh', quequan= '$quequan' where id= '$id' ";
		return $this->execute($sql);
	}
	//method xóa dữ liệu
	public function Delete($id, $table){
		$sql= " DELETE FROM $table WHERE id= '$id' ";
		return $this->execute($sql);
	}
	//method tìm kiếm dữ liệu theo từ khóa
	public function SearchData($table, $key){
		if(!isset($key)) {
			$sql= "SELECT * FROM $table ";
		$this->execute($sql);
		if($this->num_rows()==0){
			$data=0;
		}
		else{
			while($datas= $this->getData()){
				$data[]= $datas;
			}
		}
			
		}else{
		$sql= "SELECT * FROM $table WHERE hoten REGEXP '$key' ORDER BY id  DESC";
		$this->execute($sql);
		if($this->num_rows()==0){
			$data=0;
		}
		else{
			while($datas= $this->getData()){
				$data[]= $datas;
			}
		}
		}
		return $data;
	}
}

?>