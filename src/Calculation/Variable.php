<?php

namespace ivan\Architecture\Calculation;

use ivan\Architecture\Calculation\Term;

class Variable extends Term
{
    public function calc()
    {
        return $this->var;
    }
}
