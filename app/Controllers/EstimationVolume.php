<?php

namespace App\Controllers;

class EstimationVolume extends BaseController
{
    public function index()
    {
        $this->data['title'] = "DTSApp | Construction Volume Estimation ";
        $this->data['desc'] = "Calculation of volume estimation for civil construction";
        $this->data['script_files'] = ["estimation_volume"];
        return view('estimation_volume', $this->data);
    }
}
