<?php

declare(strict_types=1);

namespace App\Activity;

use App\Visitor\Visitor;

class Squash implements Activity
{
   private int $minutesPlayed;

   public function __construct(int $minutesPlayed)
   {
      $this->minutesPlayed = $minutesPlayed;
   }

   public function getMinutesPlayed()
   {
      return $this->minutesPlayed;
   }

   public function accept(Visitor $visitor)
   {
      $visitor->visitSquash($this);
   }
}