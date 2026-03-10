<?php

namespace App;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class User implements SplObserver
{
    private $observers;
    public $id;
    // Hors exercice mais notable:
    // Promotion du constructeur: https://www.php.net/manual/fr/language.oop5.decon.php#language.oop5.decon.constructor.promotion
    public function __construct(
        private string $name,
        private bool $notified = false
    ) {
        $this->observers = new SplObjectStorage();
    }

    public function update(SplSubject $subject) : void
    {
        echo "UserObserver: User's state has changed\n";
        $this->setNotified(true);
    }


    public function setNotified(bool $notified): void
    {
        $this->notified = $notified;
    }
    public function isNotified(): bool
    {
        return $this->notified;
    }
}