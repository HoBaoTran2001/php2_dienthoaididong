<h2>Thêm Loại Sản Phẩm</h2>
<form action="" method="POST">
    Ten LSP:
    <input type="text" name="txtten"><br><br>
    HìnhAnh :
    <input type="text" name="txthinh"><br><br>
    MoTa :
    <input type="text" name="txtmota"><br><br>

    <input type="submit" value="Thêm" name="btnthem">
</form>
<?php
include("connect.php");
if (isset($_POST["btnthem"])) {
    $ten = $_POST["txtten"];
    $hinh = $_POST["txthinh"];
    $mota = $_POST["txtmota"];
    $sql = "INSERT INTO `loaisanpham`(`MaLSP`, `TenLSP`, `HinhAnh`, `Mota`) VALUES (NULL, '$ten', '$hinh', '$mota');";
    $r = $db->exec($sql);
}
?>