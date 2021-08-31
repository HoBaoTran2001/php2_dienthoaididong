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

<?php require_once "php/echoHTML.php"; ?>

<?php addTopNav(); ?>

<section>
    <?php addHeader(); ?>
    <div class="infoUser"> </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <br>

    <div class="col-md-9 m-auto">
        <div class="card">
            <div class="card-header bg-info"> QUÊN MẬT KHẨU</div>
            <div class="card-body">
                <form class="form-horizontal">
                    <p> <label class="control-label">Email:</label>
                        <input id="email" class="form-control" name="email">
                    </p>
                    <p><button type="button" class="btn btn-warning" onclick="goimail()">Gửi mail</button></p>
                </form>
            </div>
        </div>
    </div>

    <br>
    <script>
        function goimail() {
            var email = document.getElementById('email').value
            $.ajax({
                type: "GET",
                url: "ajax.php",
                data: "email=" + email,
                success: function(data) {
                    alert("Data: " + data + "\nStatus: " + status);
                }
            })
        }
    </script>

</section>
<?php
addContainTaiKhoan();
addPlc();
?>

<div class="footer">
    <?php addFooter(); ?>
</div>

<i class="fa fa-arrow-up" id="goto-top-page" onclick="gotoTop()"></i>