<?php

namespace DesignPatterns\Creational\Factory;

/**
 * VehicleInterface is a contract for a vehicle
 */
interface VehicleInterface
{
    /**
     * sets the color of the vehicle
     *
     * @param string $rgb
     */
    public function setColor($rgb);
}
