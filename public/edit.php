<?php
// Import file class yang dibutuhkan
require_once '../Storage/JSONStorage.php';
require_once '../Services/BukuService.php';
require_once '../Helpers/General.php';

// Validasi: pastikan parameter ID dikirim via URL
if (!isset($_GET['id'])) {
    echo "Error: ID tidak dikirim";
    exit;
}

// Decode ID dari base64
$getID = base64_decode($_GET['id']);

// Validasi: pastikan ID hasil decode tidak kosong
if (strlen($getID) === 0) {
    echo "Error: ID tidak valid";
    exit;
}

// Konversi ID ke integer
$paramURLID = (int) $getID;

// Inisialisasi objek penyimpanan dan service
$storage = new JSONStorage('../storage/Buku.json');
$service = new BukuService($storage);
$helper = new General();

// Ambil semua data buku
$data = $service->getAll();

// Ambil data buku berdasarkan ID
$dataByID = $data[$paramURLID];

// Proses update jika form dikirim (method POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postData = $_POST;

    // Validasi: jika buku jenis "Referensi" dan status yang dikirim adalah "dipinjam", tampilkan alert dan batalkan update
    if ($dataByID['jenisBuku'] === 'Referensi' && $postData['StatusBuku'] === 'dipinjam') {
        echo "<script>
            alert('Buku Referensi tidak boleh dipinjam');
            window.location.href='edit.php?id=" . $_GET['id'] . "';
        </script>";
        exit;
    }

    // Jika lolos validasi, update data buku
    $service->update($paramURLID, $postData);

    // Tampilkan alert sukses dan redirect ke halaman utama
    echo "<script>
        alert('Data berhasil diupdate');
        window.location.href='index.php';
    </script>";
    exit;
}

// Tampilkan form edit dengan layout
ob_start(); // Mulai buffer output
require '../views/edit.php'; // Ambil isi form edit
$content = ob_get_clean(); // Simpan isi form ke variabel $content

require '../views/layout.php'; // Tampilkan layout utama dan masukkan $content