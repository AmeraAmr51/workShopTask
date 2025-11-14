<?php 

namespace App;

use App\Http\Factories\MaintenanceRequestFactory;
use App\Interfaces\MaintenanceInterface;
use App\Services\MaintenanceRequest\ElectricalIssue;

class ElectricalMaintenanceRequest extends  MaintenanceRequestFactory
{

    public function createMaintenanceRequest(): MaintenanceInterface
    {
        return new ElectricalIssue();
    }

    
    
}