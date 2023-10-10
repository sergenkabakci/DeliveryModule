<?php

namespace DeliveryModule\Tests;

use PHPUnit\Framework\TestCase;
use DeliveryModule\FastDelivery;

class FastDeliveryTest extends TestCase {
    public function testCalculateCostAndDate() {
        $fastDelivery = new FastDelivery();
        $result = $fastDelivery->calculateCostAndDate('1234567890', '0987654321', 1.5);
        $this->assertArrayHasKey('price', $result);
        $this->assertArrayHasKey('date', $result);
        $this->assertArrayHasKey('error', $result);
    }
}