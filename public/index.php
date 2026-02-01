<?php

require_once "../app/Domain/buku.php";
require_once "../app/Storage/JSONStorage.php";
require_once "../app/Services/BukuService.php";

$storage = new JSONStorage('../storage/Buku.json');
$service = new BukuService($storage);

$data = $service->getAll();
$content = "";

ob_start();
require "../views/list.php";
$content = ob_get_clean();

require "../views/layout.php";
