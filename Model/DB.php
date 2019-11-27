<?php
/**
* 
*/
class Database 
{
	private $hostname = 'localhost';
	private $username = 'root';
	private $pass = '';
	private $dbname = 'hocsinh';

	private $conn = NULL;
	private $result = NULL;

	public function connect(){
		$this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
		if( !$this->conn){
			echo "Ket noi that bai";
			exit();
		}
		else{
			mysqli_set_charset($this->conn,"utf8");
		}
		return $this->conn;
	}

	public function execute($sql){
		$this->result = $this->conn->query($sql);
		return $this->result;
	}



	public function getData(){
		
		if($this->result){
			$data = mysqli_fetch_array($this->result);
		}else{
			$data = 0;
		}
		return $data;
	}

	public function getAllData($table){

		$sql ="SELECT * FROM $table";
		$this->execute($sql);
		if($this->num_rows()==0){
			$data = 0;
		}else{
			while ($datas = $this->getData()) {
				# code...
				$data[] = $datas;
			}
		}
		return $data;
	}

	public function num_rows(){
		if($this->result){
			$num = mysqli_num_rows($this->result);
		}else {
			$num = 0;
		}
		return $num;
	}

	public function InsertData($hoten, $namsinh, $quequan){
		$sql = "INSERT INTO student (id,hoten,namsinh,quequan) VALUES (null, '$hoten', '$namsinh', '$quequan')";
		return $this->execute($sql);
	}

	public function SearchData($table, $key){

		$sql ="SELECT * FROM $table WHERE hoten REGEXP '$key' ORDER BY id DESC";
		$this->execute($sql);
		if($this->num_rows()==0){
			$data = 0;
		}else{
			while ($datas = $this->getData()) {
				# code...
				$data[] = $datas;
			}
		}
		return $data;
	}

	
}
?>

