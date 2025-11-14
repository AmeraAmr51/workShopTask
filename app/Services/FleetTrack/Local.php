<?php

namespace App\Services\FleetTrack;

use App\Interfaces\TripCostInterface;

class Local implements TripCostInterface
{

    public function  calcCostOfTrip(): float
    {
        return 100.0;
    }
}
