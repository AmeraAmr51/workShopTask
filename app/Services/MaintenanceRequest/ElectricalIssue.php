<?php 


namespace App\Services\MaintenanceRequest;

use App\Interfaces\MaintenanceInterface;
    
class ElectricalIssue implements MaintenanceInterface
{
    

    public function maintenanceRequest()
    {
        echo "Creating maintenance request for electrical issue.\n";
    }


}
