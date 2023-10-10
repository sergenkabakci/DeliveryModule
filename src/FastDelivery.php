<?php

namespace sergenkabakci\DeliveryModule;

class FastDelivery implements DeliveryService {
    private $base_url = "https://fastdelivery.com/api/";
    
    public function calculateCostAndDate($sourceKladr, $targetKladr, $weight) {
        // Call the Fast Delivery API to get the cost and date
        $response = json_decode(file_get_contents($this->base_url . "?sourceKladr=$sourceKladr&targetKladr=$targetKladr&weight=$weight"), true);
        
        // Convert the response to a unified format
        if (isset($response['error'])) {
            return array('price' => null, 'date' => null, 'error' => $response['error']);
        } else {
            return array('price' => $response['price'], 'date' => date('Y-m-d', strtotime("+{$response['period']} days")), 'error' => null);
        }
    }
}