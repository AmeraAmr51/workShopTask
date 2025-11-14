<?php

namespace App\Services\MaintenanceRequest;

use App\ElectricalMaintenanceRequest;
use App\EngineMaintenanceRequest;
use App\Http\Factories\MaintenanceRequestFactory;
use App\TiresMaintenanceRequest;

class MaintenanceResolverService
{
    public static function resolve(string $type): MaintenanceRequestFactory
    {
        return match ($type) {
            'electrical' => new ElectricalMaintenanceRequest(),
            'engine'     => new EngineMaintenanceRequest(),
            'tires'      => new TiresMaintenanceRequest(),
            default      => throw new \Exception("Unknown maintenance type: $type"),
        };
    }
}
