<?php
declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/../../Utils/debug.php";

use App\Message\Message;
use App\Officer\Officer;
use App\Officer\OfficerRank;
use App\Officer\Sergeant;
use App\Officer\General;
use App\Officer\Captain;

class Main
{
    public function run()
    {
        $message = new Message("Atak", 50, OfficerRank::CAPTAIN);

        $sergeant = new Sergeant();
        $general = new General();
        $captain = new Captain();

        $sergeant->setSuperiorOfficer($captain);
        $captain->setSuperiorOfficer($general);

        $sergeant->processMessage($message);
    }
}

(new Main())->run();