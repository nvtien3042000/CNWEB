<?php
    session_start();
    if(!isset($_COOKIE["username"])){
        $_SESSION["uri"] = $_SERVER['REQUEST_URI'];
        header("location:C_Login.php");
    }
    include_once("../model/M_Student.php");
    class Insert_Student{
        public function invoke(){
            if(isset($_GET["submit"])){
                $modelStudent = new Model_Student();
                $student = new Student(0,$_GET["name"], $_GET["age"], $_GET["university"]);
                $modelStudent->setInsertStudent($student);
                header("location:./C_InsertStudent.php?true=''");
                // include_once("../view/InsertStudent.php?true=''");
            } else{
                include_once("../view/InsertStudent.php");
            }
        }
    }
    $ctr = new Insert_Student();
    $ctr->invoke();    
    
?>