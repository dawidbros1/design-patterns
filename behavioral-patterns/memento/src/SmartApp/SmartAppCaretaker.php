<?php

declare(strict_types=1);

namespace App\SmartApp;

class SmartAppCaretaker
{
   private array $mementos = [];

   public function addMemento(SmartAppMemento $smartAppMemento)
   {
      array_push($this->mementos, $smartAppMemento);
      print_r("Zapisana wersja: " . $smartAppMemento->getVersion() . " znajduje się pod indeksem: " . (count($this->mementos) - 1) . "\n");
   }

   public function getMemento(int $index): SmartAppMemento
   {
      print_r("Wczytano wersję: " . $this->mementos[$index]->getVersion() . "\n");
      return $this->mementos[$index];
   }
}