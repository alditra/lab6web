<?php
include("koneksi.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Data Orang</title>
</head>

<body>
    <div class="container">
        <h1>Data Orang</h1>
        <div class="main">
            <a href='tambah.php'>tambah Orang</a>
            <a href='hapus.php'>hapus Orang</a>
            <table>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Orang</th>
                    <th>Ras</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
                <?php if ($result): ?>
                    <?php while ($row = mysqli_fetch_array($result)): ?>
                        <tr>
                            <td><img src="gambar/<?php echo $row['gambar']; ?>" width="60" height="80" />
                            <td>
                                <?= $row['nama']; ?>
                            </td>
                            <td>
                                <?= $row['kategori']; ?>
                            </td>
                            <td>
                                <?= $row['harga_beli']; ?>
                            </td>
                            <td>
                                <?= $row['harga_jual']; ?>
                            </td>
                            <td>
                                <?= $row['stok']; ?>
                            </td>
                            <td>
                                <a href='tambah.php'>tambah Orang</a>
                                <a href='hapus.php'>hapus Orang</a>
                            </td>
                        </tr>
                    <?php endwhile; else: ?>
                    <tr>
                        <td colspan="7">Belum ada data</td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>
</body>

</html>