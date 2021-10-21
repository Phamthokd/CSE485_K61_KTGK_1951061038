<?php
    // kiểm tra xem đã nhấn vào thêm hay chưa
    if(isset($_POST['btnthem'])){
        //lấy giá trị trên form lưu vào các biến
        $ten  = $_POST['HoTen'];
        $tuoi  = $_POST['tuoi'];
        $nhommau  = $_POST['nhommau'];
        $soluong  = $_POST['soluong'];
        $gioitinh  = $_POST['gioitinh'];
        
        $SDT  = $_POST['SDT'];
        
        //thwucj hiện quá trình 3 bước
        //bước 1: kết nối
        include('config/bd.php');


        //bước 2: khai báo truy vấn
        $sql = "INSERT INTO `blood_recipient`(`reci_name`, `reci_age`, `reci_bgrp`, `reci_bqnty`, `reci_sex`, `reci_phno`) VALUES ('$ten','$tuoi','$nhommau','$soluong','$gioitinh','$SDT')";
            echo $sql;
        if(mysqli_query($conn,$sql)==true){
            $values = 'success';
            header("Location:add.php?response='$values'");

        }else{
            $values = 'existed';
            header("Location:add.php?response='$values'");}
            //bước 4: đóng kết nối
         mysqli_close($conn);

    }
    

?>