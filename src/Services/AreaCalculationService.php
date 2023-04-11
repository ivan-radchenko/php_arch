<?php

namespace ivan\Architecture\Services;

use ivan\Architecture\Figures\ICircle;
use ivan\Architecture\Figures\ISquare;
use ivan\Architecture\Libs\CircleAreaLib;
use ivan\Architecture\Libs\SquareAreaLib;

class AreaCalculationService implements ICircle, ISquare
{
    private CircleAreaLib $circleAreaLib;
    private SquareAreaLib $squareAreaLib;

    public function __construct(CircleAreaLib $circleAreaLib, SquareAreaLib $squareAreaLib)
    {
        $this->circleAreaLib = $circleAreaLib;
        $this->squareAreaLib = $squareAreaLib;
    }

    public function circleArea(float $circumference): float
    {
        $diagonal = $circumference / M_PI;
        return $this->circleAreaLib->getCircleArea($diagonal);
    }

    public function squareArea(float $sideSquare): float
    {
        $diagonal = sqrt(2) * $sideSquare;
        return $this->squareAreaLib->getSquareArea($diagonal);
    }
}
