<h2>Thêm Người Dùng</h2>
<form action="" method="POST">
    Ho:
    <input type="text" name="txtho"><br><br>
    Ten :
    <input type="text" name="txtten"><br><br>
    SDT :
    <input type="text" name="txtsdt"><br><br>
    Email :
    <input type="text" name="txtemail"><br><br>
    DiaChi :
    <input type="text" name="txtdiachi"><br><br>

    <input type="submit" value="Thêm" name="btnthem">
</form>
<?php
include("connect.php");
if (isset($_POST["btnthem"])) {
    $ho = $_POST["txtho"];
    $ten = $_POST["txtten"];
    $sdt = $_POST["txtsdt"];
    $email = $_POST["txtemail"];
    $diachi = $_POST["txtdiachi"];
    $sql = "INSERT INTO `nguoidung`(`MaND`, `Ho`, `Ten`, `SDT`, `Email`, `DiaChi`) 
            VALUES (NULL, '$ho', '$ten', '$sdt', '$email', '$diachi');";
    $r = $db->exec($sql);
}
?>