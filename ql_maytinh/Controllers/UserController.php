<?php 
include_once './Models/User.php';
//session_start();
class UserController
{
	private $id;
	private $username;
  private $password;
  private $email;
  private $user_model;
	function __construct()
	{
		$this->user_model = new User();
	}
	public function luu_tt_user()
	{
		//Lay du lieu tu view (form)
       if (isset($_POST['username'])!=null&&isset($_POST['password'])!=null&&isset($_POST['email'])!=null) {
          $this->username = $_POST['username'];
          $this->password = $_POST['password'];
          $this->email = $_POST['email'];
    		//Goi ham luu data cua Model Vung mien
          $kq = $this->user_model->insert_data_user($this->username,$this->password,$this->email);
    		if ($kq) {//Thanh cong
    			//echo 'Thanh cong ...Luu du lieu  
               
    		}else {//loi
    			//echo 'Fall ...Luu du lieu that bai --- Vung mien Controller';
    		}
    	}else { // khong co
    		//echo 'Ban chua nhap du lieu -- Vung mien Controller';
    	} 
	}
 public function check_login()

  {
     $this->username = $_POST['username'] ;
     $this->password = $_POST['password'] ;
     if (!$_POST['username']  || !$_POST['password'] ) {
          echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        
       }
       $kq = $this->user_model->login($this->username,$this->password);

       // $connection = mysqli_connect("localhost", "root", "");
       //  $sql_string="SELECT * FROM user WHERE username='$this->username' ";
       //  echo $sql_string;
       //  $query = mysqli_query($connection,$sql_string);
       //  if ($query!=null) {
       //   echo "string";
       //  }
       
       //  $rows = mysqli_num_rows($query);
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