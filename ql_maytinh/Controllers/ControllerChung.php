<?php
	include_once './Controllers/ChuyenMucController.php';
	include_once './Controllers/SanPhamController.php';
	include_once'./Controllers/UserController.php';

	if (!isset($_POST['luu_chuyenmuc'])&&!isset($_GET['danhsach_chuyenmuc'])&&!isset($_GET['chitiet_chuyenmuc'])&&!isset($_POST['capnhat_chuyenmuc'])&&!isset($_GET['xoa_chuyenmuc'])&&!isset($_GET['tao_sanpham'])&&!isset($_POST['luu_sanpham'])&&!isset($_GET['danhsach_sanpham'])&&!isset($_GET['chitiet_sanpham'])&&!isset($_POST['capnhat_sanpham'])&&!isset($_GET['xoa_sanpham']) &!isset($_GET['signup']) &!isset($_POST['taotaikhoan']) && !isset($_GET['admin']) &&!isset($_GET['tao_chuyenmuc']) &&!isset($_GET['chuyenmuc_sanpham']) &&!isset($_GET['detail_sanpham'])) {
		$sanpham_controller = new SanPhamController();
		$data = $sanpham_controller->danhsach_sanpham();
		include './Views/layout/layout.php';
	}
	if (isset($_POST['luu_chuyenmuc'])) {		
		$chuyenmuc_controller = new ChuyenMucController();
		$chuyenmuc_controller->Luu_TT_Chuyenmuc();
	}
	//kiem tra co action lay danh sach vung mieng hay khong
	if (isset($_GET['danhsach_chuyenmuc'])) {
		//echo "danh sach vung mien se hien thi sau nhe....";
		
		$chuyenmuc_controller = new ChuyenmucController();
		$data = $chuyenmuc_controller->danhsach_chuyenmuc();
		include './Views/chuyenmuc/danhsach.php';
	}

	if (isset($_GET['chitiet_chuyenmuc'])) {
		
		$chitiet_chuyenmuc = new ChuyenMucController();
		$ketqua = $chitiet_chuyenmuc->chuyenmuc_detail();
		include './Views/chuyenmuc/edit.php';
	}

	if (isset($_POST['capnhat_chuyenmuc'])) {
		//echo "Goi controller de lam tiep..";
		
		$capnhat_chuyenmuc = new ChuyenMucController();
		$kq_capnhat = $capnhat_chuyenmuc->capnhat_chuyenmuc();
		return $kq_capnhat;
	}
	if (isset($_GET['xoa_chuyenmuc'])) {

		$xoa_chuyenmuc = new ChuyenMucController();
		$kq_xoa = $xoa_chuyenmuc->xoa_chuyenmuc();
		return $kq_xoa;
	}
	if (isset($_GET['chuyenmuc_sanpham'])) {

		$chuyenmuc_sanpham = new SanPhamController();
		$cm_sp = $chuyenmuc_sanpham->chuyenmuc_sanpham();
		include './Views/chuyenmuc/detail.php';
		return $cm_sp;
	}
//////////////////////////////////////////////////////////
	//check action goi view
	if (isset($_GET['tao_sanpham'])) {
		//goi controller vung mien ra danh sach select list
		$chuyenmuc_controller = new ChuyenmucController();
		$danhsach_chuyenmuc = $chuyenmuc_controller->danhsach_chuyenmuc();
		include './Views/sanpham/create.php';
	}

	if (isset($_POST['luu_sanpham'])) {
		//goi controller vung mien ra danh sach select list
		$sanpham_controller = new SanPhamController();
		$sanpham_controller->Luu_TT_Sanpham();
	}

	if (isset($_GET['danhsach_sanpham'])) {
		//echo "danh sach vung mien se hien thi sau nhe....";
		
		$sanpham_controller = new SanPhamController();
		$data = $sanpham_controller->danhsach_sanpham();
		include './Views/sanpham/danhsach.php';
	}

	if (isset($_GET['chitiet_sanpham'])) {
		
		$chitiet_sanpham = new SanPhamController();
		$ketqua = $chitiet_sanpham->sanpham_detail();
		$chuyenmuc_controller = new ChuyenmucController();
		$danhsach_chuyenmuc = $chuyenmuc_controller->danhsach_chuyenmuc();
		include './Views/sanpham/edit.php';
	}

	if (isset($_POST['capnhat_sanpham'])) {	
		$capnhat_sanpham = new SanPhamController();
		$kq_capnhat = $capnhat_sanpham->capnhat_sanpham();
		return $kq_capnhat;
	}
	if (isset($_GET['xoa_sanpham'])) {

		$xoa_sanpham = new SanPhamController();
		$kq_xoa = $xoa_sanpham->xoa_sanpham();
		return $kq_xoa;
	}
///////////////////////////////////////////////////////////////////////
	if (isset($_POST['login'])) {
	//khoi tao controller va goi ham xu ly san san
		$login_controller = new UserController();
		$login_controller->check_login();
	}
	if (isset($_POST['taotaikhoan'])) {
	//khoi tao controller va goi ham xu ly san san
		$user_controller = new UserController();
		$user_controller->luu_tt_user();

	}
	if (isset($_GET['signup'])) {
			include './Views/login/login.php';
		}
	if (isset($_GET['admin'])){
			//include './Views/chuyenmuc/create.php';
			include './Views/login/admin.php';
		}
	 if (isset($_GET['tao_chuyenmuc'])){
			include './Views/chuyenmuc/create.php';
		}
	if (isset($_GET['detail_sanpham'])){
			$chitiet_sanpham = new SanPhamController();
			$ketqua = $chitiet_sanpham->chitiet_sanpham();
			include './Views/sanpham/detail.php';
	}			
?>