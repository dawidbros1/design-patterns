<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/../../Utils/debug.php";

use App\CoffeeMachine\CoffeeMachine;

class Main
{
    public function run()
    {
        $coffeeMachine = new CoffeeMachine();

        $coffeeMachine->insertTheCoin();
        $coffeeMachine->pushTheButton();
        $coffeeMachine->takeTheCup();

        $coffeeMachine->returnTheCoin();
    }
}

(new Main())->run();