<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="index.css"/>
</head>
<body>
    <div id="container" style="z-index: 2;">
        <div id="header">
            <div id="main_title">
                <h1>TRƯỜNG ĐẠI HỌC BÁCH KHOA ĐÀ NẴNG</h1>
            </div>
            <div id="menu_of_header">
                <ul>
                    <li><a href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/mvc_example/controller/C_Login.php'?>">
                                                    <?php if(isset($_COOKIE["username"])){ $name = $_COOKIE["username"];
                                                        echo "Xin chào ".$name;}
                                                        else{echo "Login";} ?></a></li>
                    <li id="header_ul_li_mid"><a href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/mvc_example/controller/C_Logout.php'?>">Logout</a></li>
                </ul>
            </div>
        </div>
        <div id="menu">
        <ul>
            <li><a href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/mvc_example/index.php'?>">Trang chủ</a></li>
            <li><a href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/mvc_example/controller/C_DisplayStudent.php'?>">Xem Thông Tin</a></li>
            <li><a href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/mvc_example/controller/C_InsertStudent.php'?>">Chèn Thông Tin</a></li>
            <li><a href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/mvc_example/controller/C_UpdateStudent.php'?>">Sửa Thông Tin</a></li>
            <li><a href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/mvc_example/controller/C_DeleteStudent.php'?>">Xóa Thông Tin</a></li>
            <li><a href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/mvc_example/controller/C_FindStudent.php'?>">Tìm Thông Tin</a></li>
        </ul>
        </div>
        <div id="main_1">
            <div id="main_2">
                <div id="content">
                    <div style=" width: 94%px; height: 500px;margin: 30px 20px; border:dashed 2px #feccba;">
                        
                        <div style="margin: 20px;">
                        <?php $uri = $_SERVER['REQUEST_URI'];
                            if($uri == '/mvc_example/index.php'){
                                echo "</div></div></div></div>";
                            }
                        ?>
    </div>    








    
    

</body>
</html>