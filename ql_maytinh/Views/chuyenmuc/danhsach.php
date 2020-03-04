
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="public/css/css.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
        MENU
      </button>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        Trang Quản trị Admin
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
      <form class="navbar-form navbar-left" method="GET" role="search">
        <div class="form-group">
          <input type="text" name="q" class="form-control" placeholder="Tìm kiếm">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>  
<div class="main-container" style="padding-left: 25px">
  <div class="col-md-2 sidebar">
    <div class="row">
      <div class="absolute-wrapper"> </div>
      <!-- Menu -->
      <div class="side-menu">
        <nav class="navbar navbar-default" role="navigation">
          <!-- Main Menu -->
          <div class="side-menu-container">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#"><span class="glyphicon glyphicon-check"></span> Bảng điều khiển</a></li>
              <li><a href="?tao_chuyenmuc"><span class="glyphicon glyphicon-list-alt"></span>Tạo chuyên mục sản phẩm</a></li>
              <li><a href="?danhsach_chuyenmuc"><span class="glyphicon glyphicon-folder-close"></span>Danh sách loại sản phẩm</a></li>

              <!-- Dropdown-->
              <li><a href="?tao_sanpham"><span class="glyphicon glyphicon-plus-sign"></span>Tạo Sản phẩm</a></li>

              <li><a href="?danhsach_sanpham"><span class="glyphicon glyphicon-folder-open"></span>Danh sách sản phẩm</a></li>

            </ul>
          </div><!-- /.navbar-collapse -->
        </nav>

      </div>
    </div>      </div>
    <div class="col-md-10 content">
      <div class="panel panel-default">
        <div class="panel-heading">
          Trang hiển thị
        </div>
        <div class="panel-body">
          <br>
          <table class="table table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th>STT</th>
                <th>Tên Chuyên mục máy tính</th>
                <th>Mô tả</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($data as $chuyenmuc) {
                ?>
                <tr>
                  <td><?php echo $chuyenmuc['id_chuyenmuc'];  ?></td>
                  <td><a href="?chuyenmuc_sanpham=<?php echo $chuyenmuc['id_chuyenmuc'] ?>"><?php echo $chuyenmuc['ten_chuyenmuc'];  ?></a></td>
                  <td><?php echo $chuyenmuc['mota']; ?></td>
                  <td><a href="?chitiet_chuyenmuc=<?php echo $chuyenmuc['id_chuyenmuc'] ?>"><button type="button" class="btn btn-primary">Sửa</button></a><a href="?xoa_chuyenmuc=<?php echo $chuyenmuc['id_chuyenmuc'] ?>"><button type="button" class="btn btn-danger">Xóa</button></a></td>
                </tr>
                <?php   
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>