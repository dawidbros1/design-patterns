<?php

declare(strict_types=1);

namespace App\Activity;

use App\Visitor\Visitor;

interface Activity
{
   public function accept(Visitor $visitor);
}