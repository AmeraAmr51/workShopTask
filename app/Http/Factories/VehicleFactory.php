<?php

namespace App\Http\Factories;

use App\Interfaces\MaintenanceInterface;
use App\Interfaces\TripCostInterface;
use App\Interfaces\VehicleInterface;

abstract class VehicleFactory
{
    abstract public function calcCostOfTrip(): TripCostInterface;

    abstract public function createMaintenanceRequest(): MaintenanceInterface;


    public function getMaintenanceRequest(): MaintenanceInterface
    {
        $response = $this->createMaintenanceRequest();
        $response->maintenanceRequest();
        return $response;
    }


    public function getCalcCostOfTrip(): TripCostInterface
    {
        $response = $this->calcCostOfTrip();
        $response->calcCostOfTrip();
        return $response;
    }
}
