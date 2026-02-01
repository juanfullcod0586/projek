<?php

require_once "../app/Domain/buku.php";
require_once "../app/Storage/JSONStorage.php";
require_once "../app/Services/BukuService.php";
require_once "../app/Helpers/General.php";

$storage = new JSONStorage('../storage/Buku.json');
$service = new BukuService($storage);
$helper = new General();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $buku = new buku($_POST['Judul'], $_POST['Penulis'], $_POST['TahunTerbit'], $_POST['jenisBuku'], $_POST['StatusBuku']);
    $binding = [
        'Judul' => $buku->getJudul(),
        'Penulis' => $buku->getPenulis(),
        'TahunTerbit' => $buku->getTahunTerbit(),
        'jenisBuku' => $buku->getJenisBuku(),
        'StatusBuku' => $buku->getStatusBuku(),

    ];

    $service->add($binding);

    $helper->redirectTo('index.php');
}

ob_start();

require "../views/form.php";
$content = ob_get_clean();

require "../views/layout.php";
