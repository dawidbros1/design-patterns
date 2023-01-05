<?php

declare(strict_types=1);

namespace App\Terrain;

abstract class Terrain
{
   private string $description;
   private int $fuelCost;

   public function __construct($description, $fuelCost)
   {
      $this->description = $description;
      $this->fuelCost = $fuelCost;
   }

   public function fuelCost(): int
   {
      return $this->fuelCost;
   }

   public function getDescription(): string
   {
      return $this->description;
   }

   public function show()
   {
      print_r($this->getDescription() . ": " . $this->fuelCost() . "\n");

      // dump($this);
   }
}