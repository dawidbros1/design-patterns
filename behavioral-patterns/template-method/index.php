<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/../../Utils/debug.php";

use App\ClassicCarStartingSequence;
use App\AutomaticTransmitionStartingSequence;

class Main
{
    public function run()
    {
        $classic = new ClassicCarStartingSequence();
        $classic->startTheCar();

        print_r("--------------------------------------------\n");

        $automat = new AutomaticTransmitionStartingSequence();
        $automat->startTheCar();
    }
}

(new Main())->run();