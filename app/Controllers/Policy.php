<?php

namespace App\Controllers;

class Policy extends BaseController
{
    public function index()
    {
        $this->data['title'] = "Privacy Policy";
        $this->data['desc'] = "Civil engineering online calculator | Beam calculator | Steel structure calculator | Concrete structure calculator";
        return ($_SESSION['site_lang'] === 'id') ? view('policy_id', $this->data) : view('policy', $this->data);
    }
}
