<?php

namespace App\Controllers;

class BeamFormulas extends BaseController
{
    public function index()
    {
        $this->data['title'] = "DTSApp | " . trans('beam formulas');
        $this->data['desc'] = "This is the best beam formula online calculator. This tool includes simple beam, fixed ends beam, cantilever beam, etc.";
        $this->data['script_files'] = ["beam_formulas"];

        return view('beam_formulas', $this->data);
    }
}
