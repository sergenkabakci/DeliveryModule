<?php

namespace Sergenkabakci\DeliveryModule;

class DeliveryServiceAdapter {
    public static function adaptInputData($service, $sourceKladr, $targetKladr, $weight) {
        switch ($service) {
            case 'fast':
                return array('sourceKladr' => $sourceKladr, 'targetKladr' => $targetKladr, 'weight' => $weight);
            case 'slow':
                return array('sourceKladr' => $sourceKladr, 'targetKladr' => $targetKladr, 'weight' => $weight);
            default:
                throw new \Exception("Invalid delivery service");
        }
    }
}