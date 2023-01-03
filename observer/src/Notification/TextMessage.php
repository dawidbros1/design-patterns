<?php

declare(strict_types=1);

namespace App\Notification;

use App\Order\Order;

class TextMessage implements Observer
{
    public function update(Order $order)
    {
        print_r("SMS: Zamówienie numer: " . $order->getId() . " zmiana statusu na: " . $order->getOrderStatus() . "<br>");
    }
}