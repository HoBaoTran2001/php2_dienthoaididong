<?php
include("connect.php");
$id = "";
$ten = "";
$dongia = "";
$hinhanh = "";
if (isset($_GET["sua"])) {
    $id = $_GET["sua"];
    $sql = "select * from sanpham where MaSP=$id";
    $r1 = $db->query($sql);
    $r1 = $r1->fetch();
    $ten = $r1["TenSP"];
    $dongia = $r1["DonGia"];
    $hinhanh = $r1["HinhAnh"];
}
if (isset($_POST['them'])) {
    $ten = $_POST["TenSP"];
    $dongia = $_POST["DonGia"];
    $hinhanh = $_POST["HinhAnh"];
    $sql = "UPDATE sanpham set TenSP='$ten' , DonGia='$dongia' , HinhAnh='$hinhanh' where MaSP='$id'";
    $r = $db->exec($sql);
}
?>

<body>
    <h1>Sửa Show Sản Phẩm</h1>
    <form action="" method="post">
        MaSP :
        <input type="text" name="id" value="<?php echo $id; ?>"><br><br>
        TenSP :
        <input type="text" name="TenSP" value="<?php echo $ten; ?>"><br><br>
        DonGia :
        <input type="text" name="DonGia" value="<?php echo $dongia; ?>"><br><br>
        HinhAnh :
        <input type="text" name="HinhAnh" value="<?php echo $hinhanh; ?>"><br><br>
        <input type="submit" name="them" value="Sửa">
    </form>
</body>