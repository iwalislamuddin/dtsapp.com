<?php

namespace App\Controllers;

class ConcreteSlab extends BaseController
{
    public function index()
    {
        $this->data['title'] = "DTSApp | Concrete Slab Design ";
        $this->data['desc'] = "Calculation of reinforced concrete slab";
        $this->data['script_files'] = ["concrete_slab"];
        return view('concrete_slab', $this->data);
    }
}
