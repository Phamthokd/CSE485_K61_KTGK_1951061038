<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <div class="swap">
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
        <div class="main">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Thêm dữ liệu</h4>
                        <br><br>
                        <?php
                            if(isset($_GET['response'])){
                                if($_GET['reponse']='success')
                                    echo "<p class text-dark>thêm thành công</p>";
                            }

                        ?>
                        <form action="process-add.php" method="post">
                            <div class="mb-3">
                                <label for="HoTen" class="form-label">Họ và Tên</label>
                                <input type="text" class="form-control" id="HoTen" name="HoTen">
                                </div>
                                <div class="mb-3">
                                <label for="tuoi" class="form-label">Tuổi</label>
                                <input type="text" class="form-control" id="tuoi" name="tuoi">
                                <label for="nhommau" class="form-label">Nhóm máu</label>
                                <input type="text" class="form-control" id="nhommau" name="nhommau">

                                <label for="soluong" class="form-label">số lượng máu cần nhận</label>
                                <input type="text" class="form-control" id="soluong" name="soluong">
                                <label for="gioitinh" class="form-label">giới tính</label>
                                <input type="text" class="form-control" id="gioitinh" name="gioitinh">
                                
                                <label for="SDT" class="form-label">Số di động</label>
                                <input type="tel" class="form-control" id="SDT" name="SDT">
                                  <!-- dữ liệu phải đọc từ bảng đơn vị!-->
                                </select>
                                <br>

                                <div class="btn-group" role="group" aria-label="Basic example"> 
                                    <button type="submit" class="btn btn-primary " name="btnthem">Thêm</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <footer class="d-flex flex-wrap bg-info align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Danh bạ DHTL</p>
                </div>
                </div>
            </div>
    </footer>
    </div>
</body>
</html>