<?php
session_start();
include_once("../model/M_Student.php");
    class C_Login{
        public function invoke(){
            if(isset($_COOKIE["username"])){
                header("location:../index.php");
            }
            if(isset($_POST['ok'])){
                $modelStudent = new Model_Student();
                $modelStudent->setLogin();
                echo '<script>location.href = "'.$_SESSION["uri"].'"</script>';
            }else{
                include_once("../view/Login.php");
            }
            
        }
    }
    $ctr_Login = new C_Login();
    $ctr_Login->invoke();
?>