<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập</title>
	<link href="public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="public/css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="public/css/style4.css" rel="stylesheet" type="text/css" media="all" />  
<link href="public/css/form.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<!--banner-->
<div class="banner-top">
  <div class="containerr">
    <h1>Đăng Nhập</h1>
    <em></em>
    <h2><a href="index.html">Home</a><label>/</label>Đăng Nhập</a></h2>
  </div>
</div>
<div class="container">
    <div class="login">    
      <form method="post">
      <div class="col-md-6 login-do">
        <div class="login-mail">
          <input type="text" autocomplete="off" placeholder="Tên Đăng Nhập" name="username" required>
          <i  class="glyphicon glyphicon-user"></i>
        </div>
        <div class="login-mail">
          <input type="password" autocomplete="off" placeholder="Mật Khẩu" name="password" required>
          <i class="glyphicon glyphicon-lock"></i>
        </div>
          
        <label class="hvr-skew-backward">
          <input type="submit" name="login" value="Đăng Nhập">
        </label>
      </div>
      <div class="col-md-6 login-right">
         <h3>Quét để tải về và trải nghiệm</h3>
          <img src="public/images/code2.png" height="200px">

      </div>
      
      <div class="clearfix"> </div>
      </form>
    </div>
    
</div>

<!--//login-->

</body>
</html>