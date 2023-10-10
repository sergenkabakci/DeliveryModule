# Delivery Module
A module for calculating the delivery cost and delivery date for different delivery services.

# Installation
You can install the package using Composer:
```
composer required sergenkabakci/delivery-module
```
# Usage
First, create an instance of the delivery service using the DeliveryServiceFactory class:
```
<?php
use Sergenkabakci\DeliveryModule\DeliveryServiceFactory;
$deliveryService = DeliveryServiceFactory::createDeliveryService('fast');

?>
```
You can then use the calculateCostAndDate method to calculate the delivery cost and delivery date:
```

<?php
$result = $deliveryService->calculateCostAndDate('1234567890', '0987654321', 1.5);
if ($result['error']) {
    echo "Error: " . $result['error'];
} else {
    echo "Price: " . $result['price'] . "\n";
    echo "Date: " . $result['date'] . "\n";
}
?>
```
You can also use the DeliveryServiceAdapter class to convert the input data to a unified format:
```
<?php
use Sergenkabakci\DeliveryModule\DeliveryServiceAdapter;

$inputData = DeliveryServiceAdapter::adaptInputData('fast', '1234567890', '0987654321', 1.5);

$result = $deliveryService->calculateCostAndDate($inputData['sourceKladr'], $inputData['targetKladr'], $inputData['weight']);
?>
```

# Supported Delivery Services
The following delivery services are currently supported:

	Fast Delivery
	Slow Delivery
	
# License
This package is licensed under the MIT License
