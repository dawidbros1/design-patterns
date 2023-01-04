<?php

declare(strict_types=1);

namespace App\Order;

class Order implements Observable
{
    private $id;
    private $orderStatus;
    private $registeredObservers;
    public function __construct(int $id, string $orderStatus)
    {
        $this->id = $id;
        $this->orderStatus = $orderStatus;
        $this->registeredObservers = new \SplObjectStorage();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    public function changeOrderStatus(string $orderStatus)
    {
        $this->orderStatus = $orderStatus;
        $this->notifyObservers();
    }

    // interface observable

    public function registerObserver($observer)
    {
        // array_push($this->registeredObservers, $observer);
        $this->registeredObservers->attach($observer);
    }
    public function unregisterObserver($observer)
    {
        $this->registeredObservers->detach($observer);
        // $this->registeredObservers = array_filter($this->registeredObservers, function ($item) use ($observer) {
        //     return $item !== $observer;
        // });
    }
    public function notifyObservers()
    {
        foreach ($this->registeredObservers as $observer) {
            print_r($observer->update($this));
        }
    }
}