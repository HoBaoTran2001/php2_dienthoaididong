<?php
include("connect.php");
if (isset($_GET["xoa"])) {
    $id = $_GET["xoa"];
    $sql = "delete from loaisanpham where MaLSP=$id";
    $r = $db->exec($sql);
}
$sql = "select * from loaisanpham";
$r = $db->query($sql);
?>
<h1>Quản lý trang Loại Sản Phẩm</h1>
<table class="table table-collapse">
    <tr>
        <th class="col-md-3">Mã loại</th>
        <th class="col-md-3">Tên loại</th>
        <th class="col-md-4">Hình Ảnh</th>
        <th class="col-md-4">Mô tả</th>
        <th class="col-md-3">Chứa năng</th>
    </tr>
    <?php
    while ($row = $r->fetch()) {
    ?>
        <tr>
            <td> <?php echo $row[0]; ?></td>
            <td> <?php echo $row[1]; ?></td>
            <td>
                <img width="200px" height="50px" class="image-product" src="<?php echo $row['HinhAnh']; ?>">
            </td>
            <td> <?php echo $row[3]; ?></td>
            <td>
                <button> <a href="?act=loai&xoa=<?php echo $row[0]; ?>">Xoá</a></button>

                <button><a href="?act=loai&sua=<?php echo $row[0]; ?>">Sửa</a></button>
            </td>
        </tr>
    <?php
    }
    ?>
</table>