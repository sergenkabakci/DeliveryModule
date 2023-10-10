<?php

namespace DeliveryModule\Tests;

use PHPUnit\Framework\TestCase;
use DeliveryModule\DeliveryServiceFactory;

class DeliveryServiceFactoryTest extends TestCase {
    public function testCreateDeliveryService() {
        $fastDelivery = DeliveryServiceFactory::createDeliveryService('fast');
        $this->assertInstanceOf('DeliveryModule\FastDelivery', $fastDelivery);
        
        $slowDelivery = DeliveryServiceFactory::createDeliveryService('slow');
        $this->assertInstanceOf('DeliveryModule\SlowDelivery', $slowDelivery);
        
        $this->expectException(\Exception::class);
        $invalidDelivery = DeliveryServiceFactory::createDeliveryService('invalid');
    }
}