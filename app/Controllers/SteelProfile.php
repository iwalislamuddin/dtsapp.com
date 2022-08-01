<?php

namespace App\Controllers;

class SteelProfile extends BaseController
{
    public function index()
    {
        $this->data['title'] = "Steel Section Profiles";
        $this->data['desc'] = "Civil engineering online calculator | Beam calculator | Steel structure calculator | Concrete structure calculator";
        $this->data['script_files'] = ["steel_profile"];
        return view('steel_profile', $this->data);
    }
}
