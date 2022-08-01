<?php

namespace App\Controllers;

class ConcreteColumn extends BaseController
{
    public function index()
    {
        $this->data['title'] = "DTSApp | Concrete Column Design ";
        $this->data['desc'] = "Calculation of reinforced concrete column";
        $this->data['script_files'] = ["concrete_column"];
        return view('concrete_column', $this->data);
    }
}
