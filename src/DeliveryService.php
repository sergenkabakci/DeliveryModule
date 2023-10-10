<?php

namespace sergenkabakci\DeliveryModule;

interface DeliveryService {
    public function calculateCostAndDate($sourceKladr, $targetKladr, $weight);
}