<?php 

namespace App\Services\FleetTrack;

use App\Interfaces\TripCostInterface;


class International implements TripCostInterface
{

    public function  calcCostOfTrip(): float
    {
        return 300.0;
    }
}