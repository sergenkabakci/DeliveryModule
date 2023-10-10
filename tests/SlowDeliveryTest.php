<?php

namespace sergenkabakci\DeliveryModule\Tests;

use PHPUnit\Framework\TestCase;
use sergenkabakci\DeliveryModule\SlowDelivery;

class SlowDeliveryTest extends TestCase {
    public function testCalculateCostAndDate() {
        $slowDelivery = new SlowDelivery();
        $result = $slowDelivery->calculateCostAndDate('1234567890', '0987654321', 2.0);
        $this->assertArrayHasKey('price', $result);
        $this->assertArrayHasKey('date', $result);
        $this->assertArrayHasKey('error', $result);
    }
}