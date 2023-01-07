<?php

declare(strict_types=1);

namespace App\WorkShop;

use App\Command\Command;

class WorkShopApp
{
   private $commandQueue;

   public function __construct()
   {
      $this->commandQueue = new \SplObjectStorage();
   }

   public function addToQueue(Command $command)
   {
      $this->commandQueue->attach($command);
   }

   public function removeFromQueue(Command $command)
   {
      $this->commandQueue->detach($command);
   }

   public function run()
   {
      print_r("----- Rozpoczynam pracę -----\n");

      if (count($this->commandQueue) === 0) {
         print_r("Kolejka jest pusta \n");
      }

      foreach ($this->commandQueue as $command) {
         $command->execute();
      }

      $this->commandQueue->removeAll($this->commandQueue);
   }

   public function undoLastCommand()
   {
      foreach ($this->commandQueue as $command) {
         $command->undo();
      }
   }
}