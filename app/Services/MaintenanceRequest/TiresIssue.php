<?php 


namespace App\Services\MaintenanceRequest;

use App\Interfaces\MaintenanceInterface;

class TiresIssue implements MaintenanceInterface
{
    
// operation for each one 
    public function maintenanceRequest()
    {
        echo "Creating maintenance request for tires issue.\n";
    }   

}