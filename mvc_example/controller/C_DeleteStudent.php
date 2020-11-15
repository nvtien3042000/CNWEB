<?php
session_start();
if(!isset($_COOKIE["username"])){
    $_SESSION["uri"] = $_SERVER['REQUEST_URI'];
    header("location:C_Login.php");
}
    include_once("../model/M_Student.php");
    class Delete_Student{
        public function invoke(){
            if(isset($_GET["submit"])){
                $modelStudent = new Model_Student();
                $modelStudent->setDeleteStudent();
                header("location:C_DeleteStudent.php");
            }else{
                $modelStudent = new Model_Student();
                $students = $modelStudent->getAllStudent();
                include_once("../view/DeleteStudent.php");
            }
        }
    }

    $ctr_delete = new Delete_Student();
    $ctr_delete->invoke();
?>