<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/../../Utils/debug.php";

use App\WorkShop\Robot;
use App\WorkShop\WorkShopApp;
use App\WorkShop\CoffeeMaker;
use App\Command\Robot\RobotTurnOnCommand;
use App\Command\Robot\RobotCutCommand;
use App\Command\Robot\RobotDrillCommand;
use App\Command\Robot\RobotTurnOffCommand;
use App\Command\CoffeeMaker\CoffeeMakerTurnOffCommand;
use App\Command\CoffeeMaker\CoffeeMakerTurnOnCommand;

class Main
{
    public function run()
    {
        $robot = new Robot();
        $workShopApp = new WorkShopApp();

        $workShopApp->addToQueue(new RobotTurnOnCommand($robot));
        $workShopApp->addToQueue(new RobotCutCommand($robot));
        $workShopApp->addToQueue(new RobotDrillCommand($robot));
        $workShopApp->addToQueue(new RobotTurnOffCommand($robot));
        $workShopApp->run();

        print_r("---------------------------------\n");

        $coffeeMaker = new CoffeeMaker();
        $workShopApp->addToQueue(new CoffeeMakerTurnOnCommand($coffeeMaker));
        $workShopApp->addToQueue(new CoffeeMakerTurnOffCommand($coffeeMaker));
        $workShopApp->run();

        print_r("---------------------------------\n");

        $workShopApp->addToQueue(new RobotTurnOnCommand($robot));
        $workShopApp->undoLastCommand();
    }
}

(new Main())->run();