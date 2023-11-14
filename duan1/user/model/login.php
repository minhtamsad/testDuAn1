<?php 
class login {
    var $id_user = null;
    var $Username = null;
    var $Password = null;
    var $Firstname =null;
    var $Lastname =null;
    var $Datebirth =null;
    var $Email =null;
    var $Phone =null;
    var $status =null;  

    public function checkuser($Username, $Password){
        $db = new connect();
        $sql = "select * from users where `Username` = '$Username' and `Password` = '$Password'";
        $result = $db->pdo_query_one($sql);
        if ($result != null)
            return true;
        else
            return false;
    }
    function getUserid($Username, $Password)
    {
        $db = new connect();
        $select = "select id_user from users where Username='$Username' and Password='$Password'";
        return $db->pdo_query($select);
    }
}

class singin {
    public function sigin(){
        $Username = $_POST['Username'] ?? "";
        $Password = $_POST['Password'] ?? "";
        if (isset($_POST['btn'])){ 
          $login = new login();
          $add = $login->checkuser($Username, $Password);
          $id = $login->getUserid($Username, $Password);
          if($add == true){
            if ($id == true){
              foreach ($id as $ro){
                $_SESSION['user'] = $Username;
                header("Location: ../user/index.php?act=home");
              }
            }
          }else{
            echo '<div style = "color : red;">Lỗi</div>'; 

          }
        }
    }
}