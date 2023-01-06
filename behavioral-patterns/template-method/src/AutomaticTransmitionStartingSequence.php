<?php

declare(strict_types=1);

namespace App;

class AutomaticTransmitionStartingSequence extends ClassicCarStartingSequence
{
   public function setTheGear()
   {
      print_r("Automatyczna skrzynia biegów \n");
   }
}