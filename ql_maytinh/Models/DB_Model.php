<?php
class DB_Model{
	private $host_name  = "localhost";
	private $user_name = "root";
	private $pass = "";
	private $db_name = "ql_maytinh";
	private $sql = "";
	private $ketnoi = false;
	public function checkDBConnection()
	{
		$this->ketnoi = mysqli_connect($this->host_name, $this->user_name,$this->pass, $this->db_name);
		if ($this->ketnoi) {
			//echo "Ket noi Hosting va DB thanh cong...!";
			return true;
		}else{
			//echo "Ket noi Hosting va DB that bai...!";
			return false;
		}
	}

	//2. ham thiet lap chuoi sql de thuc thi voi db
	public function insertQuery($sql_string)
	{
		//Thuc hien ket noi
		$ketqua_ketnoi = mysqli_query($this->ketnoi, $sql_string);
		if($ketqua_ketnoi){
			//echo "Insert to DB succsess - Insert Query";
			return true;
		} else {
			//echo "Insert to DB fail - Insert Query";
			return false;
		}

	}

	public function insertQuery3($sql_string)
	{
		//Thuc hien ket noi
		$ketqua_ketnoi = mysqli_query($this->ketnoi, $sql_string);
		if($this->ketnoi){
			//echo "Insert to DB succsess - Insert Query";
			return true;
		} else {
			//echo "Insert to DB fail - Insert Query";
			return false;
		}

	}


	public function selectQuery($sql_select)
	{
		$ketqua_select = array();
		$ketqua_ketnoi = mysqli_query($this->ketnoi,$sql_select);
		if ($ketqua_ketnoi) {
			while ($data_row = mysqli_fetch_assoc($ketqua_ketnoi)) {
				$ketqua_select[] = $data_row;
			}
			return $ketqua_select;
		}else{
			//echo "Select bi loi....DB Model";
			return false;
		}
	}

	public function chuyenmuc_sanpham($sql_cm)
	{
		$ketqua_select = array();
		$ketqua_ketnoi = mysqli_query($this->ketnoi,$sql_cm);
		if ($ketqua_ketnoi) {
			while ($data_row = mysqli_fetch_assoc($ketqua_ketnoi)) {
				$ketqua_select[] = $data_row;
			}
			return $ketqua_select;
		}else{
			//echo "Select bi loi....DB Model";
			return false;
		}
	}

		//1.ket noi csdl 
	//thuc hien update du lieu
	public function updateQuery($sql_update)
	{
		$ketqua_ketnoi = mysqli_query($this->ketnoi, $sql_update);
		if($ketqua_ketnoi){
			//echo "Update to DB succsess - Insert Query";
			return true;
		} else {
			//echo "Update to DB fail - Insert Query";
			return false;
		}
	}

	public function updateQuery3($sql_update)
	{
		$ketqua_ketnoi = mysqli_query($this->ketnoi, $sql_update);
		if($this->ketnoi){
			//echo "Update to DB succsess - Insert Query";
			return true;
		} else {
			//echo "Update to DB fail - Insert Query";
			return false;
		}
	}

	//thuc hien lay 1 record theo id nao do
	public function selectOnerecord($sql_select_one)
	{
		$ketqua_ketnoi = mysqli_query($this->ketnoi, $sql_select_one);
		if($ketqua_ketnoi){
			$data_row = mysqli_fetch_row($ketqua_ketnoi);
			return $data_row;
		} else {
			return false;
		}
	}

	public function deleteQuery($sql_delete)
	{
		//Thuc hien ket noi
		$ketqua_ketnoi = mysqli_query($this->ketnoi, $sql_delete);
		if($ketqua_ketnoi){
			// $message = "xóa thành công !!!";
			// echo "<script type='text/javascript'>alert('$message');</script>";
			 header("Location: http://localhost/ql_maytinh/?danhsach_chuyenmuc");
			return true;
		} else {
			$message = "Không thể xóa kết quả này vì nó đang được sữ dụng ở bảng khác !!!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header("Location: http://localhost/ql_maytinh/?danhsach_chuyenmuc");
			return false;
		}

	}

	public function deleteQuery2($sql_delete)
	{
		//Thuc hien ket noi
		$ketqua_ketnoi = mysqli_query($this->ketnoi, $sql_delete);
		if($ketqua_ketnoi){
			// $message = "xóa thành công !!!";
			// echo "<script type='text/javascript'>alert('$message');</script>";
			 header("Location: http://localhost/ql_maytinh/?danhsach_sanpham");
			return true;
		} else {
			$message = "Không thể xóa kết quả này vì nó đang được sữ dụng ở bảng khác !!!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header("Location: http://localhost/ql_maytinh/?danhsach_sanpham");
			return false;
		}

	}
}




?>