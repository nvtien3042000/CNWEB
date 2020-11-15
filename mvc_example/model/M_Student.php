<?php
    include_once("E_Student.php");
    class Model_Student
    {
        public $servername;
        public $username;
        public $password;
        public $dbname;

        public function __construct()
        {
            $this->servername = "localhost:3307";
            $this->username = "root";
            $this->password = "";
            $this->dbname = "dulieu";
        }

        public function getConnection(){
            return mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        }

        public function getAllStudent(){
            $conn = $this->getConnection();
            $sql = "SELECT * FROM student";
            $result = mysqli_query($conn, $sql);
            $arr_AllStudent = array();

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $student = new Student($row["ID"],$row["Name"],$row["Age"],$row["University"]);
                    array_push($arr_AllStudent,$student);
                }
            }
            mysqli_close($conn);
            return $arr_AllStudent;
        }

        public function getStudentDetail($ID){
            $students = $this->getAllStudent();
            for($i = 0;$i<sizeof($students);$i++){
            }
            foreach($students as $student){
                if($student->id == $ID){
                    return $student;
                }
            }
        }

        public function setInsertStudent($student){
            $conn = $this->getConnection();
            $sql = "INSERT INTO student(name, age, university) values ('$student->name', '$student->age','$student->university');";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
        }

        public function getFindStudent($key, $value){
            $conn = $this->getConnection();
            $sql = "SELECT * FROM student where $key LIKE '%$value%'";
            $result = mysqli_query($conn, $sql);
            $arr_AllStudent = array();

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $student = new Student($row["ID"],$row["Name"],$row["Age"],$row["University"]);
                    array_push($arr_AllStudent,$student);
                }
            }
            mysqli_close($conn);
            return $arr_AllStudent;
        }

        public function setUpdateStudent($student){
            $conn = $this->getConnection();
            $id = $_SESSION["ID"];
            $sql = "UPDATE student SET name = '$student->name', age = '$student->age', university = '$student->university'
                WHERE id = '$id'";
            mysqli_query($conn, $sql);
            session_destroy();
            mysqli_close($conn);
        }

        public function setDeleteStudent(){
            $conn = $this->getConnection();
            $arrKey = array_keys($_GET);
            for($i = 0;$i<sizeof($arrKey)-1;$i++){
                $sql = "DELETE FROM student where id = '$arrKey[$i]'";
                mysqli_query($conn, $sql);
            }
            mysqli_close($conn);
        }

        public function setLogin(){
            $conn = $this->getConnection();
            $sql = "select * from admin";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    if($_POST["username"] == $row["Username"] && $_POST["password"] == $row['Password']){
    
                        $username = $row["Username"];
                        $password = $row['Password'];
    
                        setcookie("username", $row["Username"], time() + (24*3600*30), "/");
                        
                    }
                }
            }
            mysqli_close($conn);
        }
    }
?>