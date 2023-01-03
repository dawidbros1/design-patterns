<?php

declare(strict_types=1);

namespace App\Order;

class OrderStatus
{
    const CANCELLED = 'Zamówienie anulowane';
    const PENDING_PAYMENT = 'Oczekuje na płatność';
    const PENDING_SHIPMENT = 'Oczekuje na wysyłkę';
    const SHIPPED = 'Wysłane';
    const COMPLETED = 'Zakończone';
}