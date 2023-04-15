<?php

namespace ivan\Architecture\Interfaces;

interface PayableInterface
{
    public function getTotalAmount(): float;

    public function getClientPhone(): string;
}
