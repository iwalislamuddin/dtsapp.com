<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $this->data['title'] = "About Us";
        $this->data['desc'] = "Civil engineering online calculator | Beam calculator | Steel structure calculator | Concrete structure calculator";
        return view('about', $this->data);
    }
}
