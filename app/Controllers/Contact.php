<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        $this->data['title'] = "Contact";
        $this->data['desc'] = "Civil engineering online calculator | Beam calculator | Steel structure calculator | Concrete structure calculator";
        return view('contact', $this->data);
    }
}
