<?php

namespace ivan\Architecture\Calculation;

use ivan\Architecture\Calculation\Term;

class Exponent extends Term
{
    public function calc()
    {
        return pow($this->childrenLeft->calc(), $this->childrenRight->calc());
    }
}
