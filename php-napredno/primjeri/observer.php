<?php

class Subject implements SplSubject
{
    public $stanje;
    public $observeri;

    public function __construct()
    {
        $this->observeri = new SplObjectStorage();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observeri->attach($observer);
        echo 'observer dodan';
        echo '<br>';
    }
    public function detach(SplObserver $observer): void
    {
        $this->observeri->detach($observer);
        echo 'observer obrisan';
        echo '<br>';
    }
    public function notify(): void
    {
        foreach ($this->observeri as $observer) {
            $observer->update($this);
        }
    }

    public function promijeniStanje()
    {
        $this->stanje = rand(0, 20);
        echo 'Novo stanje: ' . $this->stanje;
        echo '<br>';
        $this->notify();
    }
}

class SubscriberA implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        echo 'Subscriber A je obaviješten. ';
        echo '<br>';
    }
}

class SubscriberB implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        echo 'Subscriber B je obaviješten. ';
        echo '<br>';
    }
}

$youtuber = new Subject();
$subscriberA = new SubscriberA();
$subscriberB = new SubscriberB();

$youtuber->attach($subscriberA);
$youtuber->attach($subscriberB);

$youtuber->promijeniStanje();

echo 'obrisan subscriber A';
echo '<br>';
$youtuber->detach($subscriberA);
$youtuber->promijeniStanje();