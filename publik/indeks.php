<?php

$koneksi = new mysqli("localhost", "root", "", "perpustakaan");

echo $koneksi->host_info;
