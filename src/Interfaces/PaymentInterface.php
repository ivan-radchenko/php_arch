<?php

namespace ivan\Architecture\Interfaces;

interface PaymentInterface
{
    public function pay(float $total, string $phone);
}
