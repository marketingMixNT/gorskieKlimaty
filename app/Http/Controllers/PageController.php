<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        $apartments = [
            [
                "id" => 1,
                'title' => "Apartament",
                'image' => "/assets/images/header--big.webp",
                'persons' => '2',
                'link' => '#',
            ],
            [
                "id" => 2,
                'title' => "Apartament typu studio",
                'image' => "/assets/images/header2--big.webp",
                'persons' => '4',
                'link' => '#',
            ],
            [
                "id" => 3,
                'title' => "Apartament z 1 sypialnią",
                'image' => "/assets/images/header--big.webp",
                'persons' => '5',
                'link' => '#',
            ],
            
        ];


        return view('pages.home.index',['apartments'=>$apartments]);
    }
}
