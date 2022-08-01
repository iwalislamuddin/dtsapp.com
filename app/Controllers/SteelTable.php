<?php

namespace App\Controllers;

class SteelTable extends BaseController
{
    public function index()
    {
        $this->data['title'] = "DTSApp | Structural Steel Table - Section Profiles ";
        $this->data['desc'] = "Table of structural steel section profile from various steel standard codes around the world: AISC, JIS, EN, BS, AS, etc.";
        $this->data['script_files'] = ["steel_table"];
        return view('steel_table', $this->data);
    }
}
