<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Thế giới điện thoại</title>
<link rel="shortcut icon" href="img/favicon.ico" />

<!-- Load font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

<!-- Jquery -->
<script src="lib/Jquery/Jquery.min.js"></script>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>


<!-- Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<!-- our files -->
<!-- css -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/topnav.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/taikhoan.css">
<link rel="stylesheet" href="css/gioHang.css">
<link rel="stylesheet" href="css/nguoidung.css">
<link rel="stylesheet" href="css/footer.css">
<!-- js -->
<script src="js/dungchung.js"></script>
<script src="js/nguoidung.js"></script>


<?php require_once "php/echoHTML.php";?>


<?php addTopNav(); ?>

<section>
    <?php addHeader(); ?>

    <div class="infoUser"> </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-primary" align="center">Đổi mật khẩu</h3>
                <form method="POST" onsubmit="return false;" id="formChangePass">
                    <div class="form-group">
                        <label for="user_signin">Mật khẩu cũ</label>
                        <input type="password" class="form-control" id="old_pass">
                    </div>
                    <div class="form-group">
                        <label for="user_signin">Mật khẩu mới</label>
                        <input type="password" class="form-control" id="new_pass">
                    </div>
                    <div class="form-group">
                        <label for="user_signin">Nhập lại mật khẩu mới</label>
                        <input type="password" class="form-control" id="re_new_pass">
                    </div>
                    <a href="index.php" class="btn btn-default">
                        <span class="glyphicon glyphicon-arrow-left"></span> Trở về
                    </a>
                    <button class="btn btn-primary" id="submit_change_pass">
                        <span class="glyphicon glyphicon-ok"></span> Thay đổi
                    </button>
                    <br><br>
                    <div class="alert alert-danger hidden"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
addContainTaiKhoan();
addPlc();
?>

<div class="footer">
    <?php addFooter(); ?>
</div>

<i class="fa fa-arrow-up" id="goto-top-page" onclick="gotoTop()"></i>
<script src="js/functions/change-pass.js"></script>