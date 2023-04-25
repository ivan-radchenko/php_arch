<?php

namespace ivan\Architecture\Calculation;

use ivan\Architecture\Calculation\Term;

class Minus extends Term
{
    public function calc()
    {
        return $this->childrenLeft->calc() - $this->childrenRight->calc();
    }
}
