<h2>Edit Mahasiswa - Nomor: #<?= $paramURLID ?></h2>

<form method="post">
    <input type="text" name="Judul" placeholder="Input Judul" value="<?= $dataByID['Judul'] ?>" /> <br /><br />
    <input Type="text" name="Penulis" placeholder="input Penulis" value="<?= $dataByID['Penulis'] ?>" /><br><br>
    <input type="text" name="TahunTerbit" placeholder="Input Tahun Terbit" value="<?= $dataByID['TahunTerbit'] ?>" /> <br /><br />

    <select name="jenisBuku">
        <option <?= $dataByID['jenisBuku'] === "Biasa" ? "selected" : "" ?>>Biasa</option>
        <option <?= $dataByID['jenisBuku'] === "Referensi" ? "selected" : "" ?>>Refrensi</option>
    </select>
    <br /><br />
    <select name="StatusBuku">
        <option <?= $dataByID['StatusBuku'] === "dipinjam" ? "selected" : "" ?>>dipinjam</option>
        <option <?= $dataByID['StatusBuku'] === "tersedia" ? "selected" : "" ?>>tersedia</option>
    </select>
    <br /><br />

    <button type="submit">Simpan</button>
</form>