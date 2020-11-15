<?php
    include_once("../model/M_Student.php");
    class Display_Student{
        public function invoke(){
            if(isset($_GET["ID"])){
                $modelStudent = new Model_Student();
                $student = $modelStudent->getStudentDetail($_GET["ID"]);
                include_once("../view/StudentDetail.php");
            } else{
                $modelStudent = new Model_Student();
                $students = $modelStudent->getAllStudent();
                include_once("../view/StudentList.php");
            }
        }
    }
    $controller = new Display_Student();
    $controller->invoke();
?>