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
$paramURLID = (int) $getID;
$storage = new JSONStorage('../storage/Buku.json');
$service = new BukuService($storage);
$helper = new General();

$service->delete($paramURLID);

$helper->redirectTo('index.php');
