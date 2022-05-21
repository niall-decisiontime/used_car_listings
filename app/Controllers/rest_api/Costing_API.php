<?php

namespace App\Controllers\rest_api;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Cars_model;

class Costing_API extends ResourceController
{
    use ResponseTrait;

    private $forbidden_description;
    private $discount_percentage;

    function __construct()
    {   
        $this->forbidden_description = "Action is currently forbidden";
        $this->discount_percentage = 15; 
        $this->cars_model = new Cars_model();
    }

    public function index($id = NULL)
    {   
        return $this->failForbidden($this->forbidden_description);
        exit(1);
    }

    public function get_listing_cost($car_price = NULL, $car_reg = NULL)
    {   
        $request_payload = $this->get_request_payload();
        $car_price = isset($request_payload['car_price']) ? $request_payload['car_price'] : NULL;
        $car_reg = isset($request_payload['car_reg']) ? $request_payload['car_reg'] : NULL;

        if ($car_price == NULL || $car_reg == NULL)
        {   
            return $this->fail("There must be a valid car price and registration. Please try again", 400);
            exit(1);
        }

        if ( ! is_numeric($car_price))
        {
            return $this->fail("The car price must be entered as a number.", 400);
            exit(1);
        }

        $discount_is_applied = $this->check_if_discount_is_applied($car_reg);
        $discount_text = ($discount_is_applied) ? ". A ".$this->discount_percentage."% discount has been applied because this vehicle listing expired within the last 30 days." : "";        
        $listing_fee = $this->get_listing_fee($car_price, $car_reg, $discount_is_applied);

        $msg = "The fee to list this car is: £".$listing_fee.$discount_text;
        $response = array("status"=>200,"msg"=>$msg);
        return $this->respond($response);
    }

    public function put($id = NULL)
    {
        return $this->failForbidden($this->forbidden_description);
        exit(1);
    }

    public function patch($id = null)
    {
        return $this->failForbidden($this->forbidden_description);
        exit(1);
    }

    public function delete($id = null)
    {
        return $this->failForbidden($this->forbidden_description);
        exit(1);
    }

    private function check_if_discount_is_applied($car_reg)
    {
        $discount_is_applied =  $all_listed_cars = $this->cars_model->check_if_discount_applied($car_reg);
        $discount_is_applied = ($discount_is_applied->getNumRows()) ? TRUE : FALSE;
        return $discount_is_applied;
    }

    private function get_listing_fee($car_price, $car_reg, $discount_is_applied = FALSE)
    {   
        if ($car_price > 5000)
        {
            $listing_fee = 14.99;
        }
        elseif ( ($car_price <= 5000) && ($car_price >= 1000) )
        {
            $listing_fee = 7.99;
        }
        else 
        {
            $listing_fee = 0;
        }

        if ($discount_is_applied)
        {
          $percentage = 100 - $this->discount_percentage;
          $listing_fee = ($percentage / 100) * $listing_fee;
          $listing_fee = round($listing_fee,2);
        }

        return $listing_fee;
    }

    private function get_request_payload()
    {   
        $request_payload = $this->request->getPost();
        return $request_payload;
    }

}