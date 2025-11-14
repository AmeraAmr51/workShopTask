<?php

namespace App\Http\Factories;

use App\Interfaces\MaintenanceInterface;
use App\Interfaces\TripCostInterface;
use App\Interfaces\VehicleInterface;

abstract class CostTripFactory
{
    abstract public function calcCostOfTrip(): TripCostInterface;


    public function getCalcCostOfTrip(): TripCostInterface
    {
        $response = $this->calcCostOfTrip();
        $response->calcCostOfTrip();
        return $response;
    }
}
