<?php

require_once "../app/Domain/buku.php";
require_once "../app/Storage/JSONStorage.php";
require_once "../app/Services/BukuService.php";
require_once "../app/Helpers/General.php";

$storage = new JSONStorage('../storage/Buku.json');
$service = new BukuService($storage);
$helper = new General();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $buku = new buku($_POST['Judul'], $_POST['TahunTerbit'], $_POST['jenisBuku']);
    $binding = [
        'Judul' => $buku->getJudul(),

        'TahunTerbit' => $buku->getTahunTerbit(),
        'jenisBuku' => $buku->getJenisBuku(),

    ];

    $service->add($binding);

    $helper->redirectTo('index.php');
}

ob_start();

require "../views/form.php";
$content = ob_get_clean();

require "../views/layout.php";
