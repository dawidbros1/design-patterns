<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/../../Utils/debug.php";

use App\DeliveryBox\DeliveryBox;
use App\DeliveryBox\DeliveryBoxSystem;
use App\DeliveryBox\DeliveryBoxFacade;


class Main
{
    public function run()
    {
        $deliveryBoxFacade = new DeliveryBoxFacade();
        $deliveryBoxFacade->pickupPackage();
    }
}

(new Main())->run();