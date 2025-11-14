<?php 

namespace App;

use App\Http\Factories\MaintenanceRequestFactory;
use App\Interfaces\MaintenanceInterface;
use App\Services\MaintenanceRequest\TiresIssue;

class TiresMaintenanceRequest extends  MaintenanceRequestFactory
{

    public function createMaintenanceRequest(): MaintenanceInterface
    {
        return new TiresIssue();
    }

    
    
}