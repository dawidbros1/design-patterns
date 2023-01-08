<?php

declare(strict_types=1);

namespace App\DeliveryBox;

class DeliveryBoxSystem
{
   public function sendNotification()
   {
      print_r("Wiadomość tekstowa została wysłana do użytkownika \n");
   }

   public function isPaymentSecured()
   {
      print_r("Płatność jest bezpieczna \n");
      return true;
   }

   public function isUserDataValidated()
   {
      print_r("Dane użytkownika są poprawne \n");
      return true;
   }

   public function scheduleDelivery()
   {
      print_r("Dostawa została zaplanowana \n");
   }
}