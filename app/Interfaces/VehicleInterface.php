<?php

namespace App\Interfaces;

interface VehicleInterface
{
    public function maintenanceRequest();

    public function costOfTrip() : float;


}
