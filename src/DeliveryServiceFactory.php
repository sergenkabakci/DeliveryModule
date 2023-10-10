<?php

namespace sergenkabakci\DeliveryModule;

class DeliveryServiceFactory {
    public static function createDeliveryService($service) {
        switch ($service) {
            case 'fast':
                return new FastDelivery();
            case 'slow':
                return new SlowDelivery();
            default:
                throw new \Exception("Invalid delivery service");
        }
    }
}