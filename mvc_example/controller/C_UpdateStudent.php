<?php
    session_start();
    if(!isset($_COOKIE["username"])){
        $_SESSION["uri"] = $_SERVER['REQUEST_URI'];
        header("location:C_Login.php");
    }
    include_once("../model/M_Student.php");
    class Update_Student{
        public function invoke(){
            
            if(isset($_GET["Submit"])){
                $modelStudent = new Model_Student();
                $student = new Student($_SESSION["ID"], $_GET["name"], $_GET["age"], $_GET["university"]);
                $modelStudent->setUpdateStudent($student);
                header("location:./C_UpdateStudent.php?true=''");
            }else{
                if(isset($_GET["ID"])){
                    $modelStudent = new Model_Student();
                    $student = $modelStudent->getStudentDetail($_GET["ID"]);
                    include_once("../view/UpdateDetailStudent.php");
                }else{
                    $modelStudent = new Model_Student();
                    $students = $modelStudent->getAllStudent();
                    include_once("../view/UpdateStudent.php");
                }
            }
        }
    }
    $ctr_update = new Update_Student();
    $ctr_update->invoke();
?>