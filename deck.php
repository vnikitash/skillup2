<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Deck36
{
    protected $deck = [];

    public function __construct()
    {
        $this->restoreDeck();
    }

    public function restoreDeck()
    {
        $this->deck = [];
        $this->createDeck();
        $this->shuffleDeck();
    }

    protected function createDeck()
    {
        for($i = 0; $i < 36; $i++) {
            switch ((int) ($i / 4)) {
                case 0:
                    $this->deck[] = "6";
                    break;
                case 1:
                    $this->deck[] = "7";
                    break;
                case 2:
                    $this->deck[] = "8";
                    break;
                case 3:
                    $this->deck[] = "9";
                    break;
                case 4:
                    $this->deck[] = "10";
                    break;
                case 5:
                    $this->deck[] = "J";
                    break;
                case 6:
                    $this->deck[] = "Q";
                    break;
                case 7:
                    $this->deck[] = "K";
                    break;
                case 8:
                    $this->deck[] = "A";
                    break;
            }

        }


        foreach ($this->deck as $index => &$card) {
            if ($index % 4 === 0) {
                $card .= "♡";
            } else if ($index % 4 === 1) {
                $card .= "♧";
            } else if ($index % 4 === 2) {
                $card .= '♢';
            } else {
                $card .= "♤";
            }
        }
    }

    public function getDeck(): array
    {
        return $this->deck;
    }

    public function shuffleDeck()
    {
        shuffle($this->deck);
    }

    public function getCard(): ?string
    {
        return array_shift($this->deck);
    }
}

class Deck52 extends Deck36
{

    protected function createDeck()
    {
        for($i = 0; $i < 52; $i++) {
            switch ((int) ($i / 4)) {
                case 0:
                    $this->deck[] = "2";
                    break;
                case 1:
                    $this->deck[] = "3";
                    break;
                case 2:
                    $this->deck[] = "4";
                    break;
                case 3:
                    $this->deck[] = "5";
                    break;
                case 4:
                    $this->deck[] = "6";
                    break;
                case 5:
                    $this->deck[] = "7";
                    break;
                case 6:
                    $this->deck[] = "8";
                    break;
                case 7:
                    $this->deck[] = "9";
                    break;
                case 8:
                    $this->deck[] = "10";
                    break;
                case 9:
                    $this->deck[] = "J";
                    break;
                case 10:
                    $this->deck[] = "Q";
                    break;
                case 11:
                    $this->deck[] = "K";
                    break;
                case 12:
                    $this->deck[] = "A";
                    break;
            }
        }

        foreach ($this->deck as $index => &$card) {
            if ($index % 4 === 0) {
                $card .= "♡";
            } else if ($index % 4 === 1) {
                $card .= "♧";
            } else if ($index % 4 === 2) {
                $card .= '♢';
            } else {
                $card .= "♤";
            }
        }
    }
}


$d = new Deck52();

echo $d->getCard();
print_r($d->getDeck());

$d->restoreDeck();
