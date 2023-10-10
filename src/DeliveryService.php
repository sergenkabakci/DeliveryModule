<?php

namespace Sergenkabakci\DeliveryModule;

interface DeliveryService {
    public function calculateCostAndDate($sourceKladr, $targetKladr, $weight);
}