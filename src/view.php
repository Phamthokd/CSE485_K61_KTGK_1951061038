
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-
    oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body>
    <div class="container">
    <header>
            <div class="container-fluid border-bottom border-2 border-dark">
                <div class="row">
                    <div class="col-md-12 ">
                        <nav class="navbar navbar-expand-lg navbar-light ">
                            <div class="container">
                                <a class="navbar-brand" href="#">Navbar</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-link" href="index.php">Trang chủ</a>
                                </div>
                                
                                </div>
                                
                            </div>
                            </nav>
                        
                    </div>
                </div>
            </div>   
        </header>
        <h2 style="text-align: center;margin-top : 50px">Thông tin người nhận máu</h2>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'bkt');
        $reci_id = $_GET['reci_id'];
        $slt = mysqli_query($conn, "Select * from blood_recipient where reci_id = '$reci_id'");
        if (mysqli_num_rows($slt) > 0) {
            $row = mysqli_fetch_assoc($slt);
        } else {
            header('index.php');
        }
        ?>
        <form action="" method="Post" style="margin-top: 50px;">
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Tên người nhận máu</label>
                <input name="reci_name" value="<?php echo $row['reci_name'] ?>" type="text" class="form-control" id="exampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Năm sinh</label>
                <input name="reci_age" value="<?php echo $row['reci_age'] ?>" type="text" class="form-control" id="exampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Nhóm máu</label>
                <input name="reci_bgrp" value="<?php echo $row['reci_bgrp'] ?>" type="text" class="form-control" id="exampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Số lượng máu nhận</label>
                <input name="reci_bqnty" value="<?php echo $row['reci_bqnty'] ?>" type="text" class="form-control" id="exampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Giới tính</label>
                <input name="reci_bqnty" value="<?php echo $row['reci_sex'] ?>" type="text" class="form-control" id="exampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Ngày đăng ký nhận máu</label>
                <input name="reci_reg_date" value="<?php echo $row['reci_reg_date'] ?>" type="date" class="form-control" id="exampleInput" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Số điện thoại</label>
                <input name="reci_phno" value="<?php echo $row['reci_phno'] ?>" type="text" class="form-control" id="exampleInput">
            </div>


            

        </form>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>