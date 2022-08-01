<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->data['title'] = "DTSApp | " . trans('main_title');
        $this->data['desc'] = "Civil engineering online calculator | Beam calculator | Steel structure calculator | Concrete structure calculator";
        $this->data['menu'] = [
            [
                "title" => trans('structural mechanics'),
                "submenu" => [
                    [
                        "title" => trans('beam formulas'),
                        "link"  => "beam_formulas"
                    ],
                    [
                        "title" => trans('geometry formulas'),
                        "link"  => "geometry"
                    ],
                ]
            ],
            [
                "title" => trans("steel structure"),
                "submenu" => [
                    [
                        "title" => trans('material standards'),
                        "link"  => "steel_material"
                    ],
                    [
                        "title" => trans('section properties') . ' (' . trans('tables') . ')',
                        "link"  => "steel_table"
                    ],
                    [
                        "title" => trans('section properties') . ' (' . trans('custom') . ')',
                        "link"  => "steel_profile"
                    ],
                    [
                        "title" => trans('flexural capacity'),
                        "link"  => "steel_flexure"
                    ],
                    [
                        "title" => trans('axial capacity'),
                        "link"  => "steel_axial"
                    ],
                    [
                        "title" => trans('shear capacity'),
                        "link"  => "steel_shear"
                    ],
                    [
                        "title" => trans('combined actions'),
                        "link"  => "steel_combined"
                    ],
                ]
            ],
            [
                "title" => trans("concrete structure"),
                "submenu" => [
                    [
                        "title" => trans('concrete beam'),
                        "link"  => "concrete_beam"
                    ],
                    [
                        "title" => trans('concrete column'),
                        "link"  => "concrete_column"
                    ],
                    [
                        "title" => trans('concrete slab'),
                        "link"  => "concrete_slab"
                    ],
                ]
            ],
            [
                "title" => trans("general"),
                "submenu" => [
                    [
                        "title" => trans('price estimation'),
                        "link"  => "estimation_price"
                    ],
                    [
                        "title" => trans('volume estimation'),
                        "link"  => "estimation_volume"
                    ],
                ]
            ],
        ];

        return view('home', $this->data);
    }
}
