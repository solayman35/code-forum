<?php
include('config.php');
//include ('../admin/database/admin.php');
//include(__DIR__."/config/db_config.php");

class Member{
     public $db;
     
     public function __construct() {
        $this->db=new MySQLi(db_host, db_user, db_password, db_name);
       
       if(mysqli_connect_errno()){
           echo "Could Not Connect toDatabase".  mysql_errno();
           exit();
       }
       
      // session_start();
    }
    
    
    
    public function MemberRegistration($name,$email,$location,$password,$joindate) {
        $query="INSERT INTO user VALUES(null,'$name','$email','','$joindate','','$location','$password')";
        
        $result=  mysqli_query($this->db, $query);
        return $result;
    }

    
    public function MemberLogin($email,$password) {
         $sql="SELECT * FROM user WHERE email='$email' AND password='$password'";
        $result=  mysqli_query($this->db, $sql);
        return $result;
     }

    public function MemberList() {
         $sql="SELECT * FROM user";
        $result=  mysqli_query($this->db, $sql);
        return $result;
     }
     
     
     public function PostList() {
         $sql="SELECT * FROM `post`,user WHERE user.id=post.userId ";
        $result=  mysqli_query($this->db, $sql);
        return $result;
     }
     
     
     public function PostByList($pid) {
         $sql="SELECT * FROM `post`,user WHERE user.id=post.userId AND post.pid='$pid'";
        $result=  mysqli_query($this->db, $sql);
        return $result;
     }
     
     public function PostByMemberId($id) {
         $sql="SELECT * FROM `post`,user WHERE user.id=post.userId AND user.id='$id'";
        $result=  mysqli_query($this->db, $sql);
        return $result;
     }
     
     
     public function LatestPost() {
         $sql="SELECT * FROM `post`,user WHERE user.id=post.userId  LIMIT 3 ";
        $result=  mysqli_query($this->db, $sql);
        return $result;
     }
   }
     ?>