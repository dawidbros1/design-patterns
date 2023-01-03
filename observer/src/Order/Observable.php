<?php

declare(strict_types=1);

namespace App\Order;

use Notification\Observer;

interface Observable
{
    public function registerObserver(Observer $observer);
    public function unregisterObserver(Observer $observer);
    public function notifyObservers();
}