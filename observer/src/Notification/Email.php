<?php

declare(strict_types=1);

namespace App\Notification;

use App\Order\Order;

class Email implements Observer
{
   public function update(Order $order)
   {
      print_r("EMAIL: Zamówienie numer: " . $order->getId() . " zmiana statusu na: " . $order->getOrderStatus() . "<br>");
   }
}