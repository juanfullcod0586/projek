<h2>Data buku pepustakaan</h2>

<table border="1" width="450">
    <tr>
        <th>Judul</th>

        <th>Tahun Terbit</th>
        <th>Jenis Buku</th>

        <th>Aksi</th>
    </tr>
    <?php foreach ($data as $key => $value): ?>
        <tr>
            <td><?= $value['Judul'] ?></td>

            <td><?= $value['TahunTerbit'] ?></td>
            <td><?= $value['jenisBuku'] ?></td>

            <td>
                <a href="edit.php?id=<?= base64_encode($key) ?>">Edit</a> |
                <a href="delete.php?id=<?= base64_encode($key) ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table><br />
<a href="create.php">Tambah</a>