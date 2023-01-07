<?php

declare(strict_types=1);

namespace App\Chef;

use App\Chef\EggCooker\EggCooker;

class Chef
{
   private $chef;

   private EggCooker $eggCooker;

   public function __construct(string $chef)
   {
      $this->chef = $chef;
   }

   public function cook()
   {
      $this->eggCooker->cookEgg();
   }

   public function getChef()
   {
      return $this->chef;
   }

   public function setChef(string $chef)
   {
      $this->chef = $chef;
   }

   public function getEggCooker()
   {
      return $this->eggCooker;
   }

   public function setEggCooker(EggCooker $eggCooker)
   {
      $this->eggCooker = $eggCooker;
   }
}