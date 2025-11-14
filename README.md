/**
 * Factory Design Pattern — MaintenanceRequest Factories
 *
 * This factory and its concrete implementations provide a scalable way
 * to create different types of vehicle maintenance requests without coupling
 * it must have abstract method that recal in fucntion that get Maintenance Request  and return data as MaintenanceInterface
 * the client code to specific classes. This follows the Factory Design Pattern.
 * 
 *
 * Components:
 * 1. Abstract Factory (`MaintenanceRequestFactory`):
 *    - Defines the interface for creating maintenance request objects.
 *    - Declares `createMaintenanceRequest(): MaintenanceInterface` for concrete factories to implement.
 *
 * 2. Concrete Factories (e.g., `ElectricalMaintenanceRequest`):
 *    - Implements the abstract factory method to create specific maintenance request objects.
 *    - Example: returns an instance of `ElectricalIssue` that implements `MaintenanceInterface`.
 *
 * 3. Product Interface (`MaintenanceInterface`):
 *    - Defines common methods for all maintenance requests, e.g., `maintenanceRequest()`.
 *    - Ensures consistent behavior across all maintenance types.
 *    - Ensures that data all retun from this interface .
 *
 * 4. Concrete Products (e.g., `ElectricalIssue`, `EngineIssue`, `TireIssue`):
 *    - Implement `MaintenanceInterface` with specific logic for each maintenance type.
 *

* 5. Concrete Products (e.g., `ElectricalMaintenanceRequest`, `EngineMaintenanceRequest`, `TiresMaintenanceRequest`):
 *    - Extend `MaintenanceRequestFactory` with specific return from Concrete Products to return the specific logic .
 *
 * Usage:
 * - The client (controller or service) requests a maintenance type.
 * - The resolver service selects the correct factory.
 * - The factory produces a maintenance request object.
 * - Client calls `maintenanceRequest()` on the product.
 *
 * Example:
 * ```
 * $factory = MaintenanceResolverService::resolve('electrical');
 * $maintenance = $factory->getMaintenanceRequest();
 * $maintenance->maintenanceRequest(); // Handles electrical maintenance logic
 * ```
 *
 * Benefits:
 * - Decouples object creation from usage.
 * - Supports open/closed principle (easy to extend without modifying existing code).
 * - Centralizes maintenance request creation logic for maintainability.
 *
 * Notes:
 * - Only creates maintenance request objects. Trip cost calculation is handled separately.
 * - Scales easily by adding new factories and product classes.
 */
