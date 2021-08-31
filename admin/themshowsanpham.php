<h2>Thêm Show Sản Phẩm</h2>
<form action="" method="POST">
    TenSP: <input type="text" name="txtten" id=""><br><br>
    DonGia: <input type="text" name="txtdongia" id=""><br><br>
    HinhAnh: <input type="text" name="txthinhanh" id=""><br><br>
    <input type="submit" value="Thêm" name="btnthem">
</form>
<?php
include("connect.php");
if (isset($_POST["btnthem"])) {
    $ten = $_POST["txtten"];
    $dongia = $_POST["txtdongia"];
    $hinhanh = $_POST["txthinhanh"];
    $sql = "INSERT INTO `sanpham`(`MaSP`, `TenSP`, `DonGia`, `HinhAnh`) VALUE ('null','$ten','$dongia','$hinhanh');";
    $r = $db->exec($sql);
}
?>