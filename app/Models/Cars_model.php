<?php

namespace App\Models;

use CodeIgniter\Model;

class Cars_model extends Model
{   
    protected $db;
    private $current_date;
    private $car_start_price_for_listing_fees;

    public function __construct()
    {
      $this->db = db_connect();
      $this->current_date = date('Y-m-d');
      $this->car_start_price_for_listing_fees = 1000;
    }

    public function get_all_listed_cars()
    {
      $builder = $this->db->table('car_listings');
      $builder->select('*');
      $builder->where('listing_expiry >=', $this->current_date);
      
      return $builder->get();
    }

    public function check_if_discount_applied($car_reg)
    { 
      $last_30_days = date('Y-m-d', strtotime($this->current_date.'- 30 days'));

      $builder = $this->db->table('car_listings');
      $builder->select('*');
      $builder->where('reg', $car_reg);
      $builder->where('price >=',$this->car_start_price_for_listing_fees);
      $builder->where('listing_expiry <=', $this->current_date);
      $builder->where('listing_expiry >=', $last_30_days);
      
      return $builder->get();
    }
}

?>