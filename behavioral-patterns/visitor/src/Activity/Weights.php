<?php

declare(strict_types=1);

namespace App\Activity;

use App\Visitor\Visitor;

class Weights implements Activity
{
   private int $weight;
   private int $reps;

   public function __construct(int $weight, int $reps)
   {
      $this->weight = $weight;
      $this->reps = $reps;
   }

   public function getWeight()
   {
      return $this->weight;
   }

   public function getReps()
   {
      return $this->reps;
   }

   public function accept(Visitor $visitor)
   {
      $visitor->visitWeights($this);
   }
}