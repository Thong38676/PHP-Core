<?php

include_once 'DB_Model.php';
class SanPhamModel extends DB_Model
{
	private $id_sanpham;
	private $ten_sanpham;
	private $mota_sanpham;
	private $gia_sanpham;
	private $image;
	private $xuatxu_sanpham;
	private $cpu;
	private $ram;
	private $bao_hanh;
	private $id_chuyenmuc;
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

	public function insert_Sanpham_Data($ten_sanpham,$mota_sanpham,$gia_sanpham,$image,$xuatxu_sanpham,$cpu,$ram,$bao_hanh,$id_chuyenmuc){
		$this->ten_sanpham = $ten_sanpham;
		$this->mota_sanpham = $mota_sanpham;
		$this->gia_sanpham = $gia_sanpham;
		$this->image = $image;
		$this->xuatxu_sanpham = $xuatxu_sanpham;
		$this->cpu = $cpu;
		$this->ram = $ram;
		$this->bao_hanh = $bao_hanh;
		$this->id_chuyenmuc = $id_chuyenmuc;
				//xac dinh cau lenh sql
		$sanpham_sql_insert ="INSERT INTO sanpham(ten_sanpham, mota_sanpham, gia_sanpham,image, xuatxu_sanpham, cpu, ram, bao_hanh, id_chuyenmuc) VALUES('$this->ten_sanpham','$this->mota_sanpham','$this->gia_sanpham','$this->image','$this->xuatxu_sanpham','$this->cpu','$this->ram','$this->bao_hanh','$this->id_chuyenmuc')";
				//echo "SP SQL Insert :".$sanpham_sql_insert;
		$ketqua = $this->db_model->insertQuery3($sanpham_sql_insert);
		return $ketqua;
	}


	public function select_Sanpham_Data()
		{
			$sql_select = "SELECT * FROM sanpham";
			$ketqua = $this->db_model->selectQuery($sql_select);
			return $ketqua;
		}

		//update du lieu theo id duoc truyen vao

		public function update_sanpham($id_sanpham,$ten_sp,$mota_sp,$gia_sp,$img,$xx_sp,$cpu,$ram,$bao_hanh, $id_chuyenmuc)
		{
			//cau truy van
			$sql_update = "UPDATE sanpham 
						 SET ten_sanpham = '$ten_sp', mota_sanpham = '$mota_sp',gia_sanpham = '$gia_sp',image ='$img',xuatxu_sanpham= '$xx_sp',cpu= '$cpu',ram = '$ram',bao_hanh= '$bao_hanh',id_chuyenmuc = '$id_chuyenmuc'
						 WHERE id_sanpham = $id_sanpham";
			//echo "SQL UPDATE sanpham".$sql_update;
			$ketqua = $this->db_model->updateQuery3($sql_update);
			return $ketqua;			 
		}
		//lay 01 record du lieu
		public function select_One_sanpham($id_sp)
		{
			$sql_select_one = "SELECT * FROM sanpham WHERE id_sanpham = $id_sp";
			//echo "SQL SELECT ONE RECORD".$sql_select_one;
			$ketqua = $this->db_model->selectOnerecord($sql_select_one);
			return $ketqua;
		}

		public function delete_sanpham($id_sp)
		{
			$sql_delete = "DELETE FROM sanpham WHERE id_sanpham = $id_sp";
			//echo "SQL SELECT ONE RECORD".$sql_delete;
			$ketqua = $this->db_model->deleteQuery2($sql_delete);
			return $ketqua;
		}

		public function chuyenmuc_sanpham($id_cm)
		{
			$sql_cm = "SELECT * FROM sanpham WHERE id_chuyenmuc = $id_cm";
			$ketqua = $this->db_model->chuyenmuc_sanpham($sql_cm);
			return $ketqua;
		}


}	



?>