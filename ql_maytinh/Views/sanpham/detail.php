
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Chi tiết sản phẩm</title>
  <link rel="stylesheet" type="text/css" href="public/css/shop.css">
  <link rel="stylesheet" type="text/css" href="public/css/detail.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
  <script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("top").style.top = "0";
      } else {
        document.getElementById("top").style.top = "-100px";
      }
      prevScrollpos = currentScrollPos;
    }
  </script>
  <nav class="khung">
    <div class="hung">
      <div class="fixtop position-fixed" id="top">
        <div class="header">
          <i class="far fa-clock">
            <span>Mon - Fri : 09:00 - 17:00</span>
          </i>
          <i class="gach">/</i>
          <i class="fas fa-location-arrow">
            <span>Tầng 7 Văn phòng Đại học Đông Á</span>
          </i>    
          <a href=""><i class="fab fa-twitter fahr"></i></a>
          <a href=""><i class="fab fa-tumblr fahr"></i></a>
          <a href=""><i class="fab fa-vimeo-v fahr"></i></a>
          <a href=""><i class="fab fa-google-plus-g fahr"></i></a>
          <a href=""><i class="fab fa-facebook-f fahr"></i></a>
          <i class="gach2">/</i>
          <i class="fas fa-phone fahr">
            <span>1800-222-222</span>
          </i>
          <i class="gach2">/</i>
          <i class="fas fa-envelope fahr">
            <span>contact@shopmaytinh.com</span>
          </i>
        </div>
        <div class="hnavbar">
          <div class="hlogo">
            <!-- <img src="public/images/logo.png"> -->
            <p>SHOP MÁY TÍNH PVT</p>
          </div>
          <div class="hmenu">
            <nav class="navbar navbar-expand-lg navbar-light">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link hblue" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link hblue" href="#">Giới Thiệu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link hblue" href="#">Tin Tức</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link hblue" href="#">Liên Hệ</a>
                  </li>
                  <li class="nav-item" style="margin-left: 350px">
                    <a class="nav-link" href="?signup">Đăng Nhập</a>
                  </li>                 
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>      
      <div class="hslide">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="public/images/slide1.jpg" alt="First slide" style="height: 400px">
<!--               <div class="htitle">
                <h2>WELCOME TO</h2>
                <hr>
                <hr>
                <br><br><br><br>
                <p class="hskin">Skin <span> Beauty</span></p>
                <p class="titlep">The best medical center for your skin</p>
                <button type="button" class="btn btn-outline-danger">LATEST PROMOTIONS</button>
              </div> -->
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="public/images/slide2.jpg" alt="Second slide" style="height: 400px">
<!--               <div class="htitle2">
                <h2>WELCOME TO</h2>
                <hr>
                <hr>
                <br><br><br><br>
                <p class="hskin">Skin <span> Beauty</span></p>
                <p class="titlep">The best medical center for your skin</p>
                <button type="button" class="btn btn-outline-danger">LATEST PROMOTIONS</button>
              </div> -->
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="public/images/slide3.jpg" alt="Third slide" style="height: 400px">
<!--               <div class="htitle2">
                <h2>WELCOME TO</h2>
                <hr>
                <hr>
                <br><br><br><br>
                <p class="hskin">Skin <span> Beauty</span></p>
                <p class="titlep">The best medical center for your skin</p>
                <button type="button" class="btn btn-outline-danger">LATEST PROMOTIONS</button>
              </div> -->
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    <div class="dung">
      <div class="col-md-12">
        <a href=""><h3>Sản Phẩm Nổi Bật</h3></a>
        <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="col-md-3">
                <a href=""><img class="d-block" src="public/images/lt1.jpg"></a>
              </div>
              <div class="col-md-3">
                <a href=""><img src="public/images/lt2.jpg"></a>
              </div>
              <div class="col-md-3">
                <a href=""><img src="public/images/lt3.jpg"></a>
              </div>
              <div class="col-md-3">
                <a href=""><img src="public/images/lt4.jpg"></a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-3">
                <a href=""><img class="d-block" src="public/images/lt4.jpg"></a>
              </div>
              <div class="col-md-3">
                <a href=""><img src="public/images/lt3.jpg"></a>
              </div>
              <div class="col-md-3">
                <a href=""><img src="public/images/lt2.jpg"></a>
              </div>
              <div class="col-md-3">
                <a href=""><img src="public/images/lt1.jpg"></a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    </div>
    <h3 class="text-center">Chi tiết Sản phẩm</h3></a>
    <hr>
      <br>
      <div class="container" style="margin-top: 3%">
        <div class="col-md-12 full">
          <div class="col-md-6" >     
            <img id="myimage" src="public/images/<?php echo $ketqua[4]; ?>" width="300" height="240">             
          </div>
          <div class="col-md-6">
            <h4> <?php echo $ketqua[1]; ?></h4>
            <p>Id loại sản phẩm : <?php echo $ketqua[9]; ?></p>
            <p>Giá : <?php echo $ketqua[3]; ?></p>
            <p>CPU : <?php echo $ketqua[6]; ?></p>
            <p>Ram : <?php echo $ketqua[7]; ?></p>
            <p>Xuất xứ sản phẩm : <?php echo $ketqua[5]; ?></p>
            <p>Bảo hành : <?php echo $ketqua[8]; ?></p>
            
            <p>Mô tả : <?php echo $ketqua[2]; ?></p>   
          </div>
        </div>
      </div>
<div class="trung">
      <div class="col-md-11">
        <div class="col-md-3">
          <h4>Web giới thiệu Máy tính</h4>
          <p>PVT là trang web thương mại điện tử uy tín hàng đầu tại Việt Nam, với nguồn hàng hóa phong phú đa dạng, PVT mang đến cho khách hàng những sản phẩm chất lượng cùng với dịch vụ chăm sóc khách hàng tận tình, hệ thống giao hàng của PVT luôn nhanh chóng, an toàn và tiện lợi chắc chắn sẽ khiến khách hàng phải hài lòng.</p>
        </div>
        <div class="col-md-3">
          <h4>Web giới thiệu Máy tính</h4>
          <a href="">> Xem chi tiết !!</a>
          <hr>
          <a href="">> Xem chi tiết !!</a>
          <hr>
          <a href="">> Xem chi tiết !!</a>
          <hr>
          <a href="">> Xem chi tiết !!</a>
        </div>
        <div class="col-md-3">
          <h4>Sản phẩm web</h4>
          <a href=""><img src="public/images/lt1.jpg"></a>
          <a href=""><img src="public/images/lt2.jpg"></a>
          <a href=""><img src="public/images/lt3.jpg"></a>
          <a href=""><img src="public/images/lt4.jpg"></a>
          <a href=""><img src="public/images/lt5.jpg"></a>
          <a href=""><img src="public/images/lt6.jpg"></a>
        </div>
        <div class="col-md-3">
          <h4>Thông tin liên hệ</h4>
          <i class="fas fa-map-marker-alt">
            <span> Tầng 7 Văn phòng Đại học Đông Á</span>
          </i>
          <i class="fas fa-phone">
            <span> 1800-222-222</span>
          </i>
          <i class="fas fa-envelope">
            <span> pvt@webmaytinh.com</span>
          </i>
          <i class="far fa-clock">
            <span> Hằng ngày 9:00-17:00</span>
          </i>
        </div>
      </div>
      <div class="col-md-12 footer">
        <a href=""><i class="fab fa-facebook-f"></i></a>
        <a href=""><i class="fab fa-google-plus-g"></i></a>
        <a href=""><i class="fab fa-twitter"></i></a>
        <a href=""><i class="fab fa-tumblr"></i></a>
        <a href=""><i class="fab fa-vimeo-v"></i></a>
        <ul>
          <li class="trungleft"><a href="">Home</a></li>
          <li>|</li>
          <li><a href="">About</a></li>
          <li>|</li>
          <li><a href="">News</a></li>
          <li>|</li>
          <li><a href="">Contact</a></li>
        </ul>
        <br><br>
        <hr>
      </div>
    </div>
</body>
</html>