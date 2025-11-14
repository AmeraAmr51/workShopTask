<?php

namespace App\Http\Factories;

use App\Interfaces\MaintenanceInterface;


abstract class MaintenanceRequestFactory
{

    abstract public function createMaintenanceRequest(): MaintenanceInterface;


    public function getMaintenanceRequest(): MaintenanceInterface
    {
        $response = $this->createMaintenanceRequest();
        $response->maintenanceRequest();
        return $response;
    }

}
