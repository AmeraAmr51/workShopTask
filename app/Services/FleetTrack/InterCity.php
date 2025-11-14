<?php

namespace App\Services\FleetTrack;

use App\Interfaces\TripCostInterface;

class InterCity implements TripCostInterface
{

    public function  calcCostOfTrip(): float
    {
        return 150.0;
    }
}
