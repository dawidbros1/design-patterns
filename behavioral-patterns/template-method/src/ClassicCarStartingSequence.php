<?php

declare(strict_types=1);

namespace App;

class ClassicCarStartingSequence extends CarStartingSequence
{
   public function setTheGear()
   {
      print_r("Wybieramy bieg\n");
   }

   public function startTheIgnition()
   {
      print_r("Przekręcamy kluczyć \n");
   }
}