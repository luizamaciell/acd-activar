<?php

namespace Source\App\Api;

use Source\Models\Plan;

class Plans extends Api
{

    public function __construct()
    {
        header('Content-Type: application/json; charset=UTF-8');
    }

    public function listByCategory (array $data): void
    {
        $plans = (new Plan())->selectByCategoryId($data["categories_id"]);
        $this->back($plans,200);
    }

    public function listPlans (array $data) : void
    {
        
        $plan = (new Plan())->selectAll();
        $this->back($plan,200);
        
        //echo "Olá";
    }

}