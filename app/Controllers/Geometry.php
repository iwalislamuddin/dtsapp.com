<?php

namespace App\Controllers;

class Geometry extends BaseController
{
    public function index()
    {
        $this->data['title'] = "DTSApp | Geometry Calculator";
        $this->data['desc'] = "Civil engineering online calculator | Beam calculator | Steel structure calculator | Concrete structure calculator";
        $this->data['script_files'] = ["geometry"];
        return view('geometry', $this->data);
    }
}
