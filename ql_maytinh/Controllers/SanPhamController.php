<?php
	/**
	 * 
	 */
	include_once './Models/SanPhamModel.php';
	class SanPhamController 
	{
		private $ten_sanpham;
		private $mota_sanpham;
		private $gia_sanpham;
		private $image;
		private $xuatxu_sanpham;
		private $cpu;
		private $ram;
		private $bao_hanh;
		private $id_sanpham;
		private $sanpham_model;
		function __construct()
		{
			$this->sanpham_model = new SanPhamModel();
		}
		public function Luu_TT_Sanpham()
		{
			if (isset($_POST['ten_sanpham']) 
				&& isset($_POST['mota_sanpham'])
				&& isset($_POST['gia_sanpham'])
				&& isset($_POST['image'])
				&& isset($_POST['xuatxu_sanpham'])
				&& isset($_POST['cpu'])
				&& isset($_POST['ram'])
				&& isset($_POST['bao_hanh'])
				&& isset($_POST['id_chuyenmuc']) !=null) {
				$ten_sanpham = $_POST['ten_sanpham'];
				$mota_sanpham = $_POST['mota_sanpham'];
				$gia_sanpham = $_POST['gia_sanpham'];
				$image = $_POST['image'];
				$xuatxu_sanpham = $_POST['xuatxu_sanpham'];
				$cpu = $_POST['cpu'];
				$ram = $_POST['ram'];
				$bao_hanh = $_POST['bao_hanh'];
				$id_chuyenmuc = $_POST['id_chuyenmuc'];
				$kq = $this->sanpham_model->insert_Sanpham_Data($ten_sanpham,$mota_sanpham, $gia_sanpham, $image, $xuatxu_sanpham, $cpu,$ram,$bao_hanh,$id_chuyenmuc);
					if ($kq) {
						//echo "<br>Thanh cong---Luu du lieu thanh cong";
					}else{
						//echo "Loi---Luu du lieu that bai";
					}
				}
				else{
					//echo 'ban chua nhap du lieu -- sanphamcontroller';
				}

		}
		public function danhsach_sanpham(){
			$sanpham_data = $this->sanpham_model->select_Sanpham_Data();
			return $sanpham_data;
		}


		public function capnhat_sanpham(){
			$ten_sp = $_POST['ten_sanpham'];
			$mota_sp = $_POST['mota_sanpham'];
			$gia_sp = $_POST['gia_sanpham'];
			$img = $_POST['image'];
			$xx_sp = $_POST['xuatxu_sanpham'];
			$cpu = $_POST['cpu'];
			$ram = $_POST['ram'];
			$bao_hanh = $_POST['bao_hanh'];
			$id_chuyenmuc = $_POST['id_chuyenmuc'];
			$id_sp = $_POST['id_sanpham'];
			//goi ham model tuong ung
			$kq = $this->sanpham_model->update_sanpham($id_sp, $ten_sp,$mota_sp,$gia_sp, $img, $xx_sp,$cpu, $ram, $bao_hanh,$id_chuyenmuc);
			if ($kq) {
				 //echo "Controller update thanh cong";
			}else{
				//echo "Controller update khong thanh cong";
			}
		}

		//do du lieu ra view
		public function sanpham_detail()
		{
			//lay du lieu tu view
			$id_sp = $_GET['chitiet_sanpham'];
			$ketqua = $this->sanpham_model->select_One_sanpham($id_sp);
			//var_dump($ketqua);
			return $ketqua;
		}
		public function chitiet_sanpham()
		{
			//lay du lieu tu view
			$id_sp = $_GET['detail_sanpham'];
			$ketqua = $this->sanpham_model->select_One_sanpham($id_sp);
			//var_dump($ketqua);
			return $ketqua;
		}

		public function xoa_sanpham()
		{
			$id_sp = $_GET['xoa_sanpham'];
			$ketqua = $this->sanpham_model->delete_sanpham($id_sp);
			return $ketqua;
		}

		public function chuyenmuc_sanpham()
		{
			$id_cm = $_GET['chuyenmuc_sanpham'];
			$ketqua = $this->sanpham_model->chuyenmuc_sanpham($id_cm);
			// var_dump($ketqua);
			return $ketqua;
		}




	}




?>