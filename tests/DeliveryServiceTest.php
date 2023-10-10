<?php

namespace Sergenkabakci\DeliveryModule\Tests;

use PHPUnit\Framework\TestCase;
use Sergenkabakci\DeliveryModule\DeliveryService;

class DeliveryServiceTest extends TestCase {
    public function testCalculateCostAndDate() {
        $deliveryService = $this->getMockForAbstractClass(DeliveryService::class);
        $result = $deliveryService->calculateCostAndDate('1234567890', '0987654321', 1.5);
        $this->assertArrayHasKey('price', $result);
        $this->assertArrayHasKey('date', $result);
        $this->assertArrayHasKey('error', $result);
    }
}