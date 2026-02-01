<?php
class buku
{
    protected string $Judul;

    protected int $TahunTerbit;
    protected string $jenisBuku;


    public function __construct(string $Judul, int $TahunTerbit, string $jenisBuku)
    {
        $this->Judul = $Judul;

        $this->TahunTerbit = $TahunTerbit;
        $this->jenisBuku = $jenisBuku;
    }

    // GETTER
    public function getJudul(): string
    {
        return $this->Judul;
    }



    public function getTahunTerbit(): int
    {
        return $this->TahunTerbit;
    }

    public function getJenisBuku(): string
    {
        return $this->jenisBuku;
    }
}
