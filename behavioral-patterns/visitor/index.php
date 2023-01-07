<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/../../Utils/debug.php";

use App\Activity\Weights;
use App\Activity\Treadmill;
use App\Activity\Squash;
use App\Visitor\VisitorImpl;

class Main
{
    public function run()
    {
        $treadmill = new Treadmill(400);
        $squash = new Squash(45);
        $weights = new Weights(50, 10);

        $visitor = new VisitorImpl();

        $treadmill->accept($visitor);
        $squash->accept($visitor);
        $weights->accept($visitor);
    }
}

(new Main())->run();