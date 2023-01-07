<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/../../Utils/debug.php";

use App\SmartApp\SmartAppCaretaker;
use App\SmartApp\SmartApp;

class Main
{
    public function run()
    {
        $smartAppCaretaker = new SmartAppCaretaker();
        $smartApp = new SmartApp();
        $smartApp->changeVersion(1.0);
        $smartApp->changeVersion(1.1);
        $smartApp->changeVersion(1.2);

        $smartAppCaretaker->addMemento($smartApp->save());

        $smartApp->changeVersion(1.3);
        $smartApp->changeVersion(2.0);
        $smartApp->changeVersion(2.1);

        $smartApp->load($smartAppCaretaker->getMemento(0));
    }
}

(new Main())->run();