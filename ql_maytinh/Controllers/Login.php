<?php 
include_once './Models/User.php';
session_start();
class login
{
	//private $id;
	private $username;
  private $password;
  private $user_model;
  //private $email;

	function __construct()
	{
		$this->user_model = new User();
	}
  public function check_login()

  {
     $this->username = $_POST['username'] ;
     if (!$_POST['username']  || !$_POST['password'] ) {
          echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        
       }

       $connection = mysqli_connect("localhost", "root", "");
        $sql_string="SELECT * FROM user WHERE username='$this->username' ";
        
        //$query = mysqli_query($connection,$sql_string);
        // $rows = mysqli_num_rows($query);
       //  $conn = mysqli_connect("localhost", "root", "");
       // $sql="SELECT * FROM user WHERE username='$this->username' ";
       // $result = mysqli_query($conn,$sql);
       // $row = mysqli_num_rows($result);
       //  echo $sql;
       //  echo $row."sdasds";

    //     if (mysqli_num_rows($sql) == 0) {
    //       echo "Tên đăng nhập này khqweqwewqông tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    //       exit;
    // }
       
  }
}

 ?>