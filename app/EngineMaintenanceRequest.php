<?php 

namespace App;

use App\Http\Factories\MaintenanceRequestFactory;
use App\Interfaces\MaintenanceInterface;
use App\Services\MaintenanceRequest\ElectricalIssue;
use App\Services\MaintenanceRequest\EngineIssue;

class EngineMaintenanceRequest extends  MaintenanceRequestFactory
{

    public function createMaintenanceRequest(): MaintenanceInterface
    {
        return new EngineIssue();
    }

    
    
}