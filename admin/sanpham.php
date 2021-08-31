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
<h1>Quản lý trang Sản phẩm</h1>
<table class="table table-collapse">
    <tr>
        <th class="col-md-3">Mã SP</th>
        <th class="col-md-3">Mã LSP</th>
        <th class="col-md-3">Tên SP</th>
        <th class="col-md-3">Đơn giá</th>
        <th class="col-md-3">Hình ảnh</th>
        <th class="col-md-3">Chứa năng</th>
    </tr>
    <?php
    while ($row = $r->fetch()) {
    ?>
        <tr>
            <td> <?php echo $row[0]; ?></td>
            <td> <?php echo $row[1]; ?></td>
            <td> <?php echo $row[2]; ?></td>
            <td> <?php echo $row[3]; ?></td>
            <td><img width="50px" height="70px" class="image-product" src="<?php echo $row['HinhAnh']; ?>"></td>
            <td>
                <button> <a href="?act=sanpham&xoa=<?php echo $row[0]; ?>">Xoá</a></button>
            
                <button> <a href="?act=sanpham&sua=<?php echo $row[0]; ?>">Sửa</a></button>
            </td>
        </tr>
    <?php
    }
    ?>
</table>