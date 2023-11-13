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