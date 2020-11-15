<?php
    include_once("../model/M_Student.php");
    class C_Logout{
        public function invoke(){
            if(isset($_COOKIE["username"])){
                setcookie("username", $_COOKIE["username"], time() - 1, "/");
                header("location:../index.php");
            }
            
            header("location:../index.php");
        }
    }
    $ctr_Logout = new C_Logout();
    $ctr_Logout->invoke();
?>