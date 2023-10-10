<?php

namespace Sergenkabakci\DeliveryModule\Tests;

use PHPUnit\Framework\TestCase;
use Sergenkabakci\DeliveryModule\DeliveryServiceFactory;

class DeliveryServiceFactoryTest extends TestCase {
    public function testCreateDeliveryService() {
        $fastDelivery = DeliveryServiceFactory::createDeliveryService('fast');
        $this->assertInstanceOf('sergenkabakci\DeliveryModule\FastDelivery', $fastDelivery);
        
        $slowDelivery = DeliveryServiceFactory::createDeliveryService('slow');
        $this->assertInstanceOf('sergenkabakci\DeliveryModule\SlowDelivery', $slowDelivery);
        
        $this->expectException(\Exception::class);
        $invalidDelivery = DeliveryServiceFactory::createDeliveryService('invalid');
    }
}