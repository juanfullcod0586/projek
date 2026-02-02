<?php

require_once "../app/Domain/buku.php";
require_once "../app/Storage/JSONStorage.php";
require_once "../app/Services/BukuService.php";
require_once "../app/Helpers/General.php";

if (!isset($_GET['id'])) {
    echo "Error: ID tidak dikirim";
    exit;
}

$getID = base64_decode($_GET['id']);
if (strlen($getID) === 0 && $getID === "") {
    echo "Error: tidak ada ID itu";
    exit;
}

$paramURLID = (int) $getID;
$storage = new JSONStorage('../storage/Buku.json');
$service = new BukuService($storage);
$helper = new General();

$data = $service->getAll();

$dataByID = $data[$paramURLID];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_POST['alamat'] = 'surabaya'; // Data Manual
    $service->update($paramURLID, $_POST);
    $helper->redirectTo('index.php');
}

if ($jenisBuku === 'Refrensi' && $StatusBuku == 'dipinjam') {
    echo "<script>alert('Buku Refrensi tidak boleh dipinjam');
    window.locatian.href='edit.php?id=$paramulid';</script>";
    exit;
}

ob_start();

require "../views/edit.php";
$content = ob_get_clean();

require "../views/layout.php";
