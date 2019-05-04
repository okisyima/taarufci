<!DOCTYPE html>
<html>

<head>
    <title>Membuat CRUD dengan CodeIgniter</title>
</head>

<body>
    <center>
        <h1>Membuat CRUD dengan CodeIgniter</h1>
    </center>
    <center>
        <?php echo anchor('R/add', 'Tambah Data'); ?>
    </center>

    <table style="margin:20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Action</th>
        </tr>

        <?php
        $no = 1;
        foreach ($pengguna as $u) {
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->nama ?></td>
                <td><?php echo $u->alamat ?></td>
                <td><?php echo $u->pekerjaan ?></td>
                <td>
                    <?php echo anchor('R/cobaEdit/' . $u->id, 'Edit'); ?>
                    <?php echo anchor('R/cobaDelete/' . $u->id, 'Hapus'); ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>