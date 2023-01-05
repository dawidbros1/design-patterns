<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/../../Utils/debug.php";

use App\Device\ContinentalDevide;
use App\Device\UKDevide;
use App\Socket\ContinentalSocket;
use App\Socket\UKSocket;
use App\Adapter\UKToContinentalAdapter;

class Main
{
    public function run()
    {
        $radio = new ContinentalDevide();
        $continentalSocket = new ContinentalSocket();
        $continentalSocket->plugIn($radio);

        $ukRadio = new UKDevide();
        $ukSocket = new UKSocket();
        $ukSocket->plugIn($ukRadio);

        $adapter = new UKToContinentalAdapter($ukRadio);

        $continentalSocket->plugIn($adapter);
    }
}

(new Main())->run();