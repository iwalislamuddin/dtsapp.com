<?php

namespace App\Controllers;

class SteelMaterial extends BaseController
{
    public function index()
    {
        $this->data['title'] = "DTSApp | " . trans('steel material standards');
        $this->data['desc'] = "This page contains material standards for steel structures. It provides mechanical properties for any type of steel grades such as yield strength, ultimate strength, elongation, etc.";
        $this->data['script_files'] = ["steel_material"];
        return view('steel_material', $this->data);
    }
}
