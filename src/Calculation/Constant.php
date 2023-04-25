<?php

namespace ivan\Architecture\Calculation;

use ivan\Architecture\Calculation\Term;

class Constant extends Term
{
    public function calc()
    {
        return $this->var;
    }
}
