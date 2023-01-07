<?php

declare(strict_types=1);

namespace App\Activity;

use App\Visitor\Visitor;

class Treadmill implements Activity
{
   private int $distance;

   public function __construct(int $distance)
   {
      $this->distance = $distance;
   }

   public function getDistance()
   {
      return $this->distance;
   }

   public function accept(Visitor $visitor)
   {
      $visitor->visitTreadmill($this);
   }
}