<?php
namespace App\Services;
class PaymentGateway{

    public $apiKey;
    public function __construct($apiKey){
        $this->apiKey=$apiKey;
    }
    public function execute()
    {
        return 'payment gateway';
    }
}