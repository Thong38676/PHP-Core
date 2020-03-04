<?php 
	include_once 'DB_Model.php';
	/**
	 * 
	 */
	class User extends DB_Model
	{
		private $id_user;
		private $username;
		private $password;
		private $email;
		function __construct()
		{
			$this->db_model = new DB_Model();
			if($this->db_model->checkDBConnection()){
				return true;
			}else{
				return false;
			}
		}
 		//viet ham insert
		public function insert_data_user($username,$password,$email)
		{
			//gan gia tri dau vao cho vung mien
			//de lay ten theo thuoc tinh
			$this->username = $username;
			$this->password = $password;
			$this->email = $email;
			//xac dinh cau lenh sql
			$user_sql_insert = "INSERT INTO user(username,password,email) values('$this->username','$this->password','$this->email')";
			//kiem tra
			//echo "user sql insert".$user_sql_insert;
			//thuc hien goi lenh insert vao db
			$ketqua = $this->db_model->insertQuery3($user_sql_insert);
			return $ketqua;
		}	
		public function login($username,$password)
		{
			$this->username = $username;
			$this->password = $password;
			//SELECT username, password FROM member WHERE username='$username'"
			//$sql="SELECT * FROM user WHERE username='$username' ";

			// echo  $sql;
			$connection = mysqli_connect("localhost", "root", "");
			$db = mysqli_select_db($connection, "ql_maytinh");
			//$result=mysqli_query($connection,$sql);
			$query = mysqli_query($connection, "SELECT * FROM user WHERE username='$username' ");
			 //$rows = mysqli_num_rows($query);
			 if ( $rows = mysqli_num_rows($query)==0) {
			 	 echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: ";
			 	 header("Location: http://localhost/ql_maytinh/?signup");
        			exit;
			 }
			 $row = mysqli_fetch_array($query);
			 if ($password != $row['password']) {
			        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
			        header("Location: http://localhost/ql_maytinh/?signup");
			        exit;
			    }
			    $_SESSION['username'] = $username;;
			    include_once './Views/login/admin.php';
			    die();
		
					}
	}
 ?>