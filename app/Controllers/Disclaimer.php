<?php

namespace App\Controllers;

class Disclaimer extends BaseController
{
    public function index()
    {
        $this->data['title'] = "Disclaimer";
        $this->data['desc'] = "Civil engineering online calculator | Beam calculator | Steel structure calculator | Concrete structure calculator";
        return ($_SESSION['site_lang'] === 'id') ? view('disclaimer_id', $this->data) : view('disclaimer', $this->data);
    }
}
