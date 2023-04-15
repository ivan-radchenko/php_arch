<?php

namespace ivan\Architecture\Services;

use ivan\Architecture\Interfaces\PaymentInterface;

class WebMoneyService implements PaymentInterface
{

    public function pay(float $total, string $phone): void
    {
        echo "Принят платеж $total рублей от $phone через WebMoney" . PHP_EOL;
    }
}
