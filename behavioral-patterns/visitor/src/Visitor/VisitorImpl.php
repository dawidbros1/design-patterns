<?php

declare(strict_types=1);

namespace App\Visitor;

use App\Activity\Squash;
use App\Activity\Treadmill;
use App\Activity\Weights;

class VisitorImpl implements Visitor
{
   public function visitTreadmill(Treadmill $treadmill)
   {
      print_r("Spalone kalorie podczas biegu na bieżni to: " . ($treadmill->getDistance() * 5) . "\n");
   }

   public function visitSquash(Squash $squash)
   {
      print_r("Spalone kalorie podczas grania w Squash: " . ($squash->getMinutesPlayed() * 20) . "\n");
   }

   public function visitWeights(Weights $weights)
   {
      print_r("Spalone kalorie podczas podnoszenia ciężarów to: " . ($weights->getReps() * $weights->getWeight() * 2) . "\n");
   }
}