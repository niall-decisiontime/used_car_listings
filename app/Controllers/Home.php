<?php

namespace App\Controllers;

use App\Models\Cars_model;
class Home extends BaseController
{
    public function __construct()
    {
        $this->cars_model = new Cars_model();
    }

    public function index()
    {
        $all_listed_cars = $this->cars_model->get_all_listed_cars();
        $all_listed_cars = ($all_listed_cars) ? $all_listed_cars->getResult() : array();
        $data['all_listed_cars'] = $all_listed_cars;

        return view('pages/all_listed_cars', $data);
    } 
}
