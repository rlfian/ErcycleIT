<?php 
include '../koneksi/koneksi.php';

// Query semua pengguna
$sql = "SELECT * FROM tb_pengguna";
$query = mysqli_query($db, $sql);
?>

<h2>Daftar Pengguna</h2>
<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Aksi</th>
  </tr>
  <?php while($row = mysqli_fetch_assoc($query)): ?>
  <tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['nama'] ?></td>
    <td><?= $row['email'] ?></td>
    <td>
      <a href="editpengguna.php?id=<?= $row['id'] ?>">Edit</a>
    </td>
  </tr>
  <?php endwhile; ?>
</table>