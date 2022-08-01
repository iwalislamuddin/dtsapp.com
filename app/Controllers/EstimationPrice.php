<?php

namespace App\Controllers;

class EstimationPrice extends BaseController
{
    public function index()
    {
        $this->data['title'] = "DTSApp | Constriction Price Estimation ";
        $this->data['desc'] = "Calculation of price estimation for civil construction";
        $this->data['script_files'] = ["estimation_price", "estimation"];
        return view('estimation_price', $this->data);
    }
}
