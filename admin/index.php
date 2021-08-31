<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Thế giới điện thoại</title>
    <link rel="shortcut icon" href="img/favicon.ico" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.min.js"></script>

    <!-- Poly -->
    <link href="css/poly.css" rel="stylesheet" />

    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url("bg-img.jpg");
        }

        .selector-for-some-widget {
            box-sizing: content-box;
        }

        a {
            text-align: center;
            left: 180px;
            font-weight: bold;
        }

        article {
            padding-top: 250px;
            text-align: center;
        }

        h1 {
            font-weight: bold;
            text-shadow: 0px 0px 5px yellow;
        }

        h2 {
            font-weight: bold;
            text-shadow: 0px 0px 5px yellow;
        }

        h3 {
            font-weight: bold;
            text-shadow: 0px 0px 2px #FF6600;
        }

        input {
            font-weight: bold;
            border: none;
            border-radius: 3px;
            box-shadow: 0 0 3px blue;
            color: orangered;
            outline: none;
        }

        th {
            text-align: center;
        }

        .logo {
            width: 250px;
            height: 60px;
            float: left;
            transition-duration: .1s;
        }

        .logo:hover {
            transform: scale(1.05)
        }

        .logo img {
            width: 100%;
            height: 100%;
            vertical-align: middle;
            animation: example 5s infinite ease-in-out;
        }

        /* Standard syntax */
        @keyframes example {

            35%,
            100% {
                transform: scale(1);
            }

            10% {
                transform: rotateX(360deg) scale(1.15);
            }
        }
    </style>

<body>
    <div class="container">
        <header class="panel-heading text-center">
            <div class="logo">
                <a href="../index.php">
                    <img width="400px" height="100px" src="img/logo.jpg" alt="Trang chủ Smartphone Store" title="Trang chủ Smartphone Store">
                </a>
            </div>
            <br><br><br>
            <h1><a style="color: blue;" href="./index.php">Trang quản Lý Smartphone Store - HoBaoTran-PS12247</a></h1>
        </header>

        <Nav class="float-left nav nav-tabs">
            <div class="poly-sheet ">
                <div class="col-sm-12 ">
                    <!-- List group -->
                    <h3>Quản lý Sản Phẩm</h3>
                    <div class="list-group list-group-horizontal" id="myList" role="tablist">
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="?act=loai" role="tab">Quản lí Loại Sản Phẩm <span class="badge bg-primary text-dark"> 14</span></a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="?act=nguoidung" role="tab">Quản lí Người Dùng <span class="badge bg-success text-dark"> 2</span></a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="?act=sanpham" role="tab">Quản lí Sản Phẩm <span class="badge bg-warning text-dark"> 49</span></a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="?act=show" role="tab">Show Sản Phẩm <span class="badge bg-info text-dark"> 20</span></a>

                    </div>
                    <h3>Thêm Sản Phẩm</h3>
                    <div class="list-group list-group-horizontal" id="myList" role="tablist">
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="?act=themloaisanpham" role="tab">Thêm Loại Sản Phẩm</a>

                        
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="?act=themshow" role="tab">Thêm show Sản Phẩm</a>
                    </div>
                </div>
            </div>
        </Nav>
        <article>
            <?php
            if (isset($_GET["act"])) {
                $act = $_GET["act"];
            } else {
                $act = "";
            }
            switch ($act) {
                case 'loai':
                    if (isset($_GET["sua"])) {
                        include("sualoaisanpham.php");
                    }
                    include("loaisanpham.php");
                    break;
                case 'nguoidung':
                    if (isset($_GET["sua"])) {
                        include("suanguoidung.php");
                    }
                    include("nguoidung.php");
                    break;
                case 'sanpham':
                    if (isset($_GET["sua"])) {
                        include("suasanpham.php");
                    }
                    include("sanpham.php");
                    break;
                case 'show':
                    if (isset($_GET["sua"])) {
                        include("suashowsanpham.php");
                    }
                    include("showsanpham.php");
                    break;
                case 'themshow':
                    if (isset($_GET["them"])) {
                        include("themshowsanpham.php");
                    }
                    include("themshowsanpham.php");
                    break;
                case 'themloaisanpham':
                    if (isset($_GET["them"])) {
                        include("themloaisanpham.php");
                    }
                    include("themloaisanpham.php");
                    break;
                case 'themthuoctinh':
                    if (isset($_GET["them"])) {
                        include("themthuoctinh.php");
                    }
                    include("themthuoctinh.php");
                    break;
                default:
                    break;
            }
            ?>
        </article>
    </div>
</body>
<br><br>
<?php
include_once "./footer.php";
?>

</html>