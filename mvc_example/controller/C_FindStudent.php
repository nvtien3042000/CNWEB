<?php
    include_once("../model/M_Student.php");
    class Find_Student{
        public function invoke(){
            if(isset($_GET["find"])){
                $modelStudent = new Model_Student();
                $students = $modelStudent->getFindStudent($_GET["findCheck"], $_GET["input"]);
                include_once("../view/FindStudent.php");
            } else{
                // header("location:../view/FindStudent.php");
                include_once("../view/FindStudent.php");
            }
        }
    }
    $ctr_findStudent = new Find_Student();
    $ctr_findStudent->invoke();
?>