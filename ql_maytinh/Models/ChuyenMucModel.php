<?php
	/**
	 * 
	 */
	include_once('DB_Model.php');
	class ChuyenMucModel extends DB_Model
	{
		private $id_chuyenmuc;
		private $ten_chuyenmuc;
		private $mota;
		private $db_model;
		function __construct()
		{
			$this->db_model = new DB_Model();
			if($this->db_model->checkDBConnection()){
				return true;
			}else{
				return false;
			}
		}

		public function insert_Chuyenmuc_Data($ten,$mt){
			$this->ten_chuyenmuc = $ten;
			$this->mota = $mt;
			//xac dinh cau lenh sql
			$chuyenmuc_sql_insert ="INSERT INTO chuyenmuc(ten_chuyenmuc,mota) VALUES('$this->ten_chuyenmuc','$this->mota')";
			//echo "CM SQL Insert :".$chuyenmuc_sql_insert;
			$ketqua = $this->db_model->insertQuery3($chuyenmuc_sql_insert);
			return $ketqua;
		}

		public function select_Chuyenmuc_Data()
		{
			$sql_select = "SELECT * FROM chuyenmuc";
			$ketqua = $this->db_model->selectQuery($sql_select);
			return $ketqua;
		}

		//update du lieu theo id duoc truyen vao

		public function update_chuyenmuc($id_chuyenmuc,$ten_cm,$mota_cm)
		{
			//cau truy van
			$sql_update = "UPDATE chuyenmuc 
						 SET ten_chuyenmuc = '$ten_cm', mota = '$mota_cm'
						 WHERE id_chuyenmuc = $id_chuyenmuc";
			//echo "SQL UPDATE".$sql_update;
			$ketqua = $this->db_model->updateQuery($sql_update);
			return $ketqua;			 
		}
		//lay 01 record du lieu
		public function select_One_chuyenmuc($id_cm)
		{
			$sql_select_one = "SELECT * FROM chuyenmuc WHERE id_chuyenmuc = $id_cm";
			//echo "SQL SELECT ONE RECORD".$sql_select_one;
			$ketqua = $this->db_model->selectOnerecord($sql_select_one);
			return $ketqua;
		}

		public function delete_chuyenmuc($id_cm)
		{
			$sql_delete = "DELETE FROM chuyenmuc WHERE id_chuyenmuc = $id_cm";
			//echo "SQL SELECT ONE RECORD".$sql_delete;
			$ketqua = $this->db_model->deleteQuery($sql_delete);
			return $ketqua;
		}


		
	}




?>