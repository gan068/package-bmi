<?php
namespace Tingchungk\Bmi;

class Health
{
    public function bmi($height, $weight)
    {
        return round($weight / pow($height / 100.0, 2), 1);
    }
}
