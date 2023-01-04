<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";

use App\Notification\TextMessage;
use App\Order\Order;
use App\Order\OrderStatus;
use App\Notification\MobileApp;
use App\Notification\Email;

class Main
{
    private Order $order;
    private TextMessage $textMessage;
    private Email $email;
    private MobileApp $mobileApp;
    public function __construct()
    {
        $this->order = new Order(1, OrderStatus::PENDING_PAYMENT);

        $this->textMessage = new TextMessage();
        $this->mobileApp = new MobileApp();
        $this->email = new Email();

        $this->order->registerObserver($this->textMessage);
        $this->order->registerObserver($this->mobileApp);
        $this->order->registerObserver($this->email);
        $this->order->notifyObservers();

        print_r("---------------------------------- <br>");
        $this->order->unregisterObserver($this->textMessage);
        $this->order->notifyObservers();

        print_r("---------------------------------- <br>");
        $this->order->changeOrderStatus(OrderStatus::SHIPPED);
    }
}

(new Main());