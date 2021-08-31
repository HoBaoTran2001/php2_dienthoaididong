<?php
include("connect.php");
$id = "";
$ten = "";
$hinh = "";
$mota = "";

if (isset($_GET["sua"])) {
    $id = $_GET["sua"];
    $sql = "select * from loaisanpham where MaLSP=$id";
    $r1 = $db->query($sql);
    $r1 = $r1->fetch();
    $ten = $r1["TenLSP"];
    $hinh = $r1["HinhAnh"];
    $mota = $r1["Mota"];
}
if (isset($_POST['them'])) {
    $ten = $_POST["TenSP"];
    $hinh = $_POST["HinhAnh"];
    $mota = $_POST["Mota"];
    $sql = "update loaisanpham set TenLSP='$ten' where MaLSP='$id'";
    $r = $db->exec($sql);
}
?>

<body>
    <hh1>Sửa Loại Sản Phẩm</h1>
        <form action="" method="post">
            MaLSP :
            <input type="text" name="id" value="<?php echo $id; ?>"><br><br>
            Ten :
            <input type="text" name="TenSP" value="<?php echo $ten; ?>"><br><br>
            HìnhAnh :
            <input type="text" name="HinhAnh" value="<?php echo $hinh; ?>"><br><br>
            MoTa :
            <input type="text" name="Mota" value="<?php echo $mota; ?>"><br><br>
            <input type="submit" name="them" value="Sửa">
        </form>
</body>