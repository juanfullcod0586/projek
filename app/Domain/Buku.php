<?php

abstract class Buku 
{
    protected string $judul;
    protected string $penulis;
    protected int $terbit;
    protected string $Tipebuku;
    protected string $StatusBuku;

    public function __construct(string $judul, string $penulis, int $terbit,string $TipeBuku string $StatusBuku)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->terbit = $terbit;
        $this->TipeBuku = $TipeBuku;
        $this->StatusBuku = $StatusBuku;
    }

    // GETTER
    public function getJudul(): string {
        return $this->judul;
    }

    public function getPenulis(): string {
        return $this->penulis;
    }

    public function getTerbit(): int {
        return $this->terbit;
    }

    public function getTipeBuku(): string {
        return $this->Tipebuku;
    }

    public function getStatusbuku(): string {
        return $this->StatusBuku;
    }

    // SETTER
   

    // Polymorphism
    abstract public function getStatus(): string;
}