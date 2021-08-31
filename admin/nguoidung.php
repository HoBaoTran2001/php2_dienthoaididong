    <?php
    include("connect.php");
    if (isset($_GET["xoa"])) {
        $id = $_GET["xoa"];
        $sql = "delete from nguoidung where MaND=$id";
        $r = $db->exec($sql);
    }
    $sql = "select * from nguoidung";
    $r = $db->query($sql);
    ?>
    <h1>Quản lý trang Người Dùng</h1>
    <table class="table table-collapse">
        <tr>
            <th class="col-md-3">MaND</th>
            <th class="col-md-3">Ho</th>
            <th class="col-md-3">Ten</th>
            <th class="col-md-3">GioiTinh</th>
            <th class="col-md-3">SDT</th>
            <th class="col-md-3">Email</th>
            <th class="col-md-3">DiaChi</th>
            <th class="col-md-3">TaiKhoan</th>
            <th class="col-md-3">MatKhau</th>
            <th class="col-md-3">Chứa năng</th>

        </tr>
        <?php
        while ($row = $r->fetch()) {

        ?>
            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td><?php echo $row[4]; ?></td>
                <td><?php echo $row[5]; ?></td>
                <td><?php echo $row[6]; ?></td>
                <td><?php echo $row[7]; ?></td>
                <td><?php echo $row[8]; ?></td>
                <td>
                    <button><a href="?act=nguoidung&xoa=<?php echo $row[0]; ?>">Xóa</a></button>
                
                    <button><a href="?act=nguoidung&sua=<?php echo $row[0]; ?>">Sửa</a></button>
                </td>

            </tr>
        <?php
        }
        ?>
    </table>