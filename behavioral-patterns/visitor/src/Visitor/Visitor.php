<?php

declare(strict_types=1);

namespace App\Visitor;

use App\Activity\Squash;
use App\Activity\Treadmill;
use App\Activity\Weights;

interface Visitor
{
   public function visitTreadmill(Treadmill $treadmill);
   public function visitSquash(Squash $squash);
   public function visitWeights(Weights $weights);

}