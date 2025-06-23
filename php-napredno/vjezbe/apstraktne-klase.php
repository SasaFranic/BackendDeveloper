<?php

//definirajte abstraktnu klasu Osoba
abstract class Osoba
{

    //definirajte jedno normalno svojstvo
    public $ime;

    //definirajte jednu normalnu metodu
    public function predstaviSe()
    {
        echo "Moje ime je " . $this->ime . ".";
    }

    //definirajte jednu apstraktnu metodu
    abstract public function predstaviSeDetaljno();

}

//napravite child klasu Student
class Student extends Osoba
{
    public $brojIndeksa;

    public function predstaviSeDetaljno()
    {
        echo "Moje ime je " . $this->ime . " i moj broj indeksa je " . $this->brojIndeksa . ".";
    }
}

//napravite child klasu Profesor
class Profesor extends Osoba
{
    public $predmet;

    public function predstaviSeDetaljno()
    {
        echo "Moje ime je " . $this->ime . " i predajem predmet " . $this->predmet . ".";
    }
}

//napravite instancu klase Student
$student = new Student();

//napravite instancu klase Profesor
$profesor = new Profesor();

//pozovite definirane metode
$student->ime = "Ivan";
$student->brojIndeksa = "12345";
$student->predstaviSe();
$student->predstaviSeDetaljno();
echo "<br>";
$profesor->ime = "Dragan";
$profesor->predmet = "Matematika";
$profesor->predstaviSe();
$profesor->predstaviSeDetaljno();