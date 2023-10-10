<?php

namespace DeliveryModule;

interface DeliveryService {
    public function calculateCostAndDate($sourceKladr, $targetKladr, $weight);
}