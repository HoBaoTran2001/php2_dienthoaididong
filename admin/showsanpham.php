<style>
    .column {
        width: 20%;
        float: left;
    }

    img {
        width: 50px;
        height: 70px;
    }

    .sp {
        text-align: center;
        padding: 10px;
        margin: 5px;
        border-radius: 20px;
        box-shadow: 0 0 5px gray;
    }

    .sp .ten {
        color: blue;
    }

    .sp .gia {
        color: red;
    }

    .sp .gia del {
        color: gray;
    }

    img {
        max-width: 50%;
    }
</style>

<body>

    <?php
    include_once("connect.php");
    $sql = "select * from sanpham order by MaSP desc limit 20";
    $result = $db->query($sql);
    ?>
    <h1>Quản lý trang Show Sản Phẩm</h1>
    <?php
    include("connect.php");
    if (isset($_GET["xoa"])) {
        $id = $_GET["xoa"];
        $sql = "delete from sanpham where MaSP=$id";
        $r = $db->exec($sql);
    }
    $sql = "select * from sanpham";
    $r = $db->query($sql);
    ?>

    <?php
    while ($value = $result->fetch()) {
    ?>
        <div class="column">
            <div class="sp">
                <div class="ten">
                    <?php echo $value["TenSP"]; ?></div>
                <img src="<?php echo $value["HinhAnh"]; ?>" alt="">
                <div class="gia">
                    <del><?php echo $value["DonGia"]; ?> VNĐ</del><br>
                    <?php echo $value["DonGia"]; ?>VNĐ
                </div>
                <td>
                    <button> <a href="?act=show&xoa=<?php echo $value[0]; ?>">Xoá</a></button>
                
                    <button><a href="?act=show&sua=<?php echo $value[0]; ?>">Sửa</a></button>
                </td>
            </div>
        </div>
    <?php
    }
    ?>
</body>