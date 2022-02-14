<html>
    <head>
        <title>Danh sách thành viên</title>
        <meta charset="utf8"/>
    </head>
    <body>
        <h1>Danh sách thành viên</h1>
        <table border="1" style="width:100%" cellspacing="1">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Họ và Tên</td>
                    <td>Tên</td>
                    <td>Mật Khẩu</td>
                    <td>Giới Tính</td>
                    <td>Quốc Gia</td>
                    <td>Số điện thoại</td>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($list_users)) {
                    $t = 0;
                    foreach ($list_users as $user) {
                        $t ++;
                        ?>
                        <tr>
                            <td><?php echo $t; ?></td>
                            <td><?php echo $user['fullName'] ?></td>
                            <td><?php echo $user['username'] ?></td>
                            <td><?php echo $user['password'] ?></td>
                            <td><?php echo $user['sex'] ?></td>
                            <td><?php echo $user['national'] ?></td>
                            <td><?php echo $user['phone'] ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>

            </tbody>
        </table>
    </body>
</html>
