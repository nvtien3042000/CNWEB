<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Trangchu.css"/>
</head>



<body>
    <div id="container" style="z-index: 2;">
        <div id="header">
            <div id="main_title">
                <h1>TRƯỜNG ĐẠI HỌC BÁCH KHOA ĐÀ NẴNG</h1>
            </div>
            <div id="menu_of_header">
                <ul>
                    <li><a href="Dangnhap.php"><?php if(isset($_COOKIE["username"])){ $name = $_COOKIE["username"];
                                                        echo "Xin chào ".$name;}
                                                        else{echo "Login";} ?></a></li>
                    <li id="header_ul_li_mid"><a href="Dangxuat.php">Logout</a></li>
                </ul>
            </div>
        </div>

        <div id="menu">
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li>
                    <a href="#">Xem thông tin</a>
                    <ul class="sub-menu" id="menu-inf">
                        <li><a href="XemthongtinNV.php">Xem thông tin NV</a></li>
                        <li><a href="XemthongtinPB.php">Xem thông tin PB</a></li>
                    </ul>
                </li>
                <li><a href="#">Cập nhật</a>
                    <ul class="sub-menu">
                        <li><a href="CapNhapNV.php">Cập nhật NV</a></li>
                        <li><a href="CapNhapPB.php">Cập nhật PB</a></li>
                    </ul>
                </li>
                <li><a href="#">Tìm kiếm</a>
                    <ul class="sub-menu">
                        <li><a href="TimkiemNV.php">Tìm kiếm NV</a></li>
                    </ul>
                </li>
                <li><a href="#">Thêm</a>
                    <ul class="sub-menu">
                        <li><a href="ChenNV.php">Thêm NV</a></li>
                        <li><a href="ChenPB.php">Thêm PB</a></li>
                    </ul>
                </li>
                <li><a href="#">Xóa</a>
                    <ul class="sub-menu" id="menu-del">
                        <li><a href="XoaNV.php">Xóa NV</a></li>
                        <li><a href="XoaTatCaNV.php">Xóa Tất Cả NV</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div id="main_1">
            <div id="main_2">
                <div id="content">
                    <div style=" width: 94%px; height: 500px;margin: 30px 20px; border:dashed 2px #feccba;">
                        <!-- <iframe src="" frameborder="0" width="100%" height="100%" name="content"></iframe> -->
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>









<!-- <body>
    
    
    <ol>
        <li><a href="Dangnhap.php" >Đăng nhập Admin</a></li>
        <li><a href="./XemthongtinNV.php">Xem thông tin NV</a></li>
        <li><a href="XemthongtinPB.php">Xem thông tin PB</a></li>
        <li><a href="TimkiemNV.php">Tìm kiếm NV</a></li>
        <li><a href="CapNhapNV.php">Cập nhật NV</a></li>
        <li><a href="CapNhapPB.php">Cập nhật PB</a></li>
        <li><a href="ChenNV.php">Chèn NV</a></li>
        <li><a href="ChenPB.php">Chèn PB</a></li>
        <li><a href="XoaNV.php">Xóa NV</a></li>
        <li><a href="XoaTatCaNV.php">Xóa tất cả NV</a></li>
        <li><a href="XoaPB.php">Xóa PB</a></li>
        <li><a href="Dangxuat.php">Đăng xuất Admin</a></li>
    </ol>
    
</body> -->
</html>

<?php

?>