<?php

declare(strict_types=1);

namespace App\DeliveryBox;

class DeliveryBox
{
   public function isDeliveryBoxFull()
   {
      print_r("Skrytka nie jest pełna \n");
      return false;
   }

   public function isDeliveryBoxBroken()
   {
      print_r("Skrytka nie jest uszkodzona \n");
      return false;
   }

   public function getUserData()
   {
      print_r("Wprowadzona dane użytkownika \n");
   }

   public function openBox()
   {
      print_r("Skrytka została otwarta \n");
   }
}