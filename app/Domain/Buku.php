<?php
class buku
{
    protected string $Judul;
    protected string $Penulis;
    protected int $TahunTerbit;
    protected string $jenisBuku;
    protected string $statusBuku;

    public function __construct(string $Judul, string $Penulis, int $TahunTerbit, string $jenisBuku, string $statusBuku)
    {
        $this->Judul = $Judul;
        $this->Penulis = $Penulis;
        $this->TahunTerbit = $TahunTerbit;
        $this->jenisBuku = $jenisBuku;
        $this->statusBuku = $statusBuku;
    }

    // GETTER
    public function getJudul(): string
    {
        return $this->Judul;
    }

    public function getPenulis(): string
    {
        return $this->Penulis;
    }

    public function getTahunTerbit(): int
    {
        return $this->TahunTerbit;
    }

    public function getJenisBuku(): string
    {
        return $this->jenisBuku;
    }
    public function getstatusBuku(): string
    {
        return $this->statusBuku;
    }
}
