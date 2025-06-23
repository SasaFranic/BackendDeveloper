<?php

// ekterni iterator
class RijecniIterator implements Iterator
{
    public $trenutnaPozicija = 0;
    public $objektKolekcije;

    public function __construct($objektKolekcije)
    {
        $this->objektKolekcije = $objektKolekcije;
    }

    public function current(): string
    {
        // Vraća trenutni element
        return $this->objektKolekcije->getRijeci()[$this->trenutnaPozicija];
    }

    public function key(): int
    {
        // Vraća ključ trenutnog elementa
        return $this->trenutnaPozicija;
    }
    public function next(): void
    {
        // Pomakne pokazivač na sljedeći element
        $this->trenutnaPozicija++;
    }
    public function rewind(): void
    {
        // Vraća pokazivač na početak
        $this->trenutnaPozicija = 0;
    }
    public function valid(): bool
    {
        // Provjerava je li trenutni element valjan
        return isset($this->objektKolekcije->getRijeci()[$this->trenutnaPozicija]);
    }
}
// klasa koja koristi ekterni iterator
class KolekcijaRijeci implements IteratorAggregate
{
    //implementacija
    public $rijeci = [];

    public function __construct($rijeci)
    {
        // Inicijalizacija kolekcije
        $this->rijeci = $rijeci;
    }

    public function addRijec($rijec)
    {
        // Dodaje riječ u kolekciju
        $this->rijeci[] = $rijec;
    }

    public function getRijeci()
    {
        // Vraća sve riječi u kolekciji
        return $this->rijeci;
    }

    public function getIterator(): Iterator
    {
        return new RijecniIterator($this);
    }

}

// primjer korištenja
$kolekcija = new KolekcijaRijeci(['aaaa', 'bbbb', 'cccc', 'dddd',]);

foreach ($kolekcija->getIterator() as $element) {
    // Ispisuje ključ i vrijednost
    echo $element . '<br>';
}


