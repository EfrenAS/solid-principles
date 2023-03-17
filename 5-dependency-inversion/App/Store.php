<?php

namespace App;

class Store
{

  protected $paymentProcessor;

  public function __construct(PaymentProcessor $paymentProcessor)
  {
    $this->paymentProcessor = $paymentProcessor;
  }

  public function purchase()
  {
    $this->paymentProcessor->pay();
  }
}
