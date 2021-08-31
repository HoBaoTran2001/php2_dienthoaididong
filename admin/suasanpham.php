<?php
include("connect.php");
$id = "";
$ten = "";
if (isset($_GET["sua"])) {
    $id = $_GET["sua"];
    $sql = "select * from sanpham where MaSP=$id";
    $r1 = $db->query($sql);
    $r1 = $r1->fetch();
    $ten = $r1["TenSP"];
}
if (isset($_POST['them'])) {
    $ten = $_POST["TenSP"];
    $sql = "update sanpham set TenSP='$ten' where MaSP='$id'";
    $r = $db->exec($sql);
}
?>

<body>
    <h1>Sửa Sản Phẩm</h1>
    <form action="" method="post">
        MaLSP :
        <input type="text" name="id" value="<?php echo $id; ?>">
        Ten :
        <input type="text" name="TenSP" value="<?php echo $ten; ?>">
        <input type="submit" name="them" value="Sửa">
    </form>
</body>