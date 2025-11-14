<?php 

namespace App\Services\MaintenanceRequest;

use App\Interfaces\MaintenanceInterface;
use App\Interfaces\VehicleInterface;

class EngineIssue implements MaintenanceInterface
{
    

    public function maintenanceRequest()
    {
        echo "Creating maintenance request for engine issue.\n";
    }


}