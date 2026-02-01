<?php
/* kode bawah untuk berpidah halaman setelah input */
class General
{
    public function redirectTo(string $path): void
    {
        header("Location: $path");
        exit();
    }
}
