<?php

namespace Sergenkabakci\DeliveryModule\Tests;

use PHPUnit\Framework\TestCase;
use Sergenkabakci\DeliveryModule\DeliveryServiceAdapter;

class DeliveryServiceAdapterTest extends TestCase {
    public function testAdaptInputData() {
        $fastInputData = DeliveryServiceAdapter::adaptInputData('fast', '1234567890', '0987654321', 1.5);
        $this->assertArrayHasKey('sourceKladr', $fastInputData);
        $this->assertArrayHasKey('targetKladr', $fastInputData);
        $this->assertArrayHasKey('weight', $fastInputData);
        
        $slowInputData = DeliveryServiceAdapter::adaptInputData('slow', '1234567890', '0987654321', 2.0);
        $this->assertArrayHasKey('sourceKladr', $slowInputData);
        $this->assertArrayHasKey('targetKladr', $slowInputData);
        $this->assertArrayHasKey('weight', $slowInputData);
        
        $this->expectException(\Exception::class);
        $invalidInputData = DeliveryServiceAdapter::adaptInputData('invalid', '1234567890', '0987654321', 1.0);
    }
}