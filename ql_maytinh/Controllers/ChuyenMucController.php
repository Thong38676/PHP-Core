<?php
	/**
	 * 
	 */
	include './Models/ChuyenMucModel.php';
	class ChuyenmucController 
	{
		private $ten_cm;
		private $mota;
		private $chuyenmuc_model;
		function __construct()
		{
			$this->chuyenmuc_model = new ChuyenMucModel();
		}
		public function Luu_TT_Chuyenmuc()
		{
			if (isset($_POST['ten_chuyenmuc']) && isset($_POST['mota'])) {
				$ten_cm = $_POST['ten_chuyenmuc'];
				$mota = $_POST['mota'];
				$kq = $this->chuyenmuc_model->insert_Chuyenmuc_Data($ten_cm, $mota);
					if ($kq) {
						//echo "<br>Thanh cong---Luu du lieu thanh cong";
					}else{
						//echo "Loi---Luu du lieu that bai";
					}
				}
				else{
			}

		}

		public function danhsach_chuyenmuc(){
			$chuyenmuc_data = $this->chuyenmuc_model->select_Chuyenmuc_Data();
			return $chuyenmuc_data;
		}


		public function capnhat_chuyenmuc(){
			$ten_cm = $_POST['ten_chuyenmuc'];
			$mota_cm = $_POST['mota'];
			$id_cm = $_POST['id_chuyenmuc'];
			//goi ham model tuong ung
			$kq = $this->chuyenmuc_model->update_chuyenmuc($id_cm, $ten_cm,$mota_cm);
			if ($kq) {
				 //echo "Controller update thanh cong";
			}else{
				//echo "Controller update khong thanh cong";
			}
		}

		//do du lieu ra view
		public function chuyenmuc_detail()
		{
			//lay du lieu tu view
			$id_cm = $_GET['chitiet_chuyenmuc'];
			$ketqua = $this->chuyenmuc_model->select_One_chuyenmuc($id_cm);
			//var_dump($ketqua);
			return $ketqua;
		}

		public function xoa_chuyenmuc()
		{
			$id_cm = $_GET['xoa_chuyenmuc'];
			$ketqua = $this->chuyenmuc_model->delete_chuyenmuc($id_cm);
			return $ketqua;
		}

		
	}




?>