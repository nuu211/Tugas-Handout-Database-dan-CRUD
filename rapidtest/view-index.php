<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Peserta Rapid Test</title>
</head>
<body>
<table>
    <tr>
        <td>Email</td>
        <td>Nama</td>
    </tr>
    <?php foreach($daftarPeserta as $peserta) { ?>
    <tr>
        <td><?= $peserta->getEmail() ?></td>
        <td><?= $peserta->getNama() ?></td>
    </tr>
    <?php } ?>
</table>
<p><a href="tambah.php">Tambah Peserta</a></p>
</body>
</html>
