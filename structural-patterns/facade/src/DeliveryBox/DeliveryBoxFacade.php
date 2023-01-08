<?php

declare(strict_types=1);

namespace App\DeliveryBox;

class DeliveryBoxFacade
{
   private DeliveryBox $deliveryBox;
   private DeliveryBoxSystem $deliveryBoxSystem;

   public function __construct()
   {
      $this->deliveryBox = new DeliveryBox();
      $this->deliveryBoxSystem = new DeliveryBoxSystem();
   }

   public function pickupPackage()
   {
      $this->deliveryBox->getUserData();

      if ($this->deliveryBoxSystem->isUserDataValidated() && $this->deliveryBoxSystem->isPaymentSecured()) {
         $this->deliveryBox->openBox();
      }
   }
}