<?php

namespace App\Controllers;

class ConcreteBeam extends BaseController
{
    public function index()
    {
        $this->data['title'] = "DTSApp | Concrete Beam Design ";
        $this->data['desc'] = "Calculation of reinforced concrete beam";
        $this->data['script_files'] = ["concrete_beam"];
        return view('concrete_beam', $this->data);
    }
}
