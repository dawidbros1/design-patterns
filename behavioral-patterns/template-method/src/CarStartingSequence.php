<?php

declare(strict_types=1);

namespace App;

abstract class CarStartingSequence
{
   public final function startTheCar()
   {
      $this->sitOnTheSeat();
      $this->fastenSeatBelts();
      $this->setTheGear();
      $this->startTheIgnition();
      $this->go();
   }

   private function go()
   {
      print_r("Wciskamy pedał gazu \n");
   }

   private function sitOnTheSeat()
   {
      print_r("Siadamy na siedzeniu \n");
   }

   private function fastenSeatBelts()
   {
      print_r("Zapinamy pasy \n");
   }

   public abstract function setTheGear();

   public abstract function startTheIgnition();
}