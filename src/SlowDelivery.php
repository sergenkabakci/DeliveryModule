<?php

namespace DeliveryModule;

class SlowDelivery implements DeliveryService {
    private $base_url = "https://slowdelivery.com/api/";
    
    public function calculateCostAndDate($sourceKladr, $targetKladr, $weight) {
        // Call the Slow Delivery API to get the coefficient and date
        $response = json_decode(file_get_contents($this->base_url . "?sourceKladr=$sourceKladr&targetKladr=$targetKladr&weight=$weight"), true);
        
        // Convert the response to a unified format
        if (isset($response['error'])) {
            return array('price' => null, 'date' => null, 'error' => $response['error']);
        } else {
            return array('price' => 150 * $response['coefficient'], 'date' => $response['date'], 'error' => null);
        }
    }
}