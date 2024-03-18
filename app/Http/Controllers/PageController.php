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
                'title' => "typu Standard",
                'image' => "/assets/images/gorskie_klimaty-23.jpg",
                'persons' => '2',
                'link' => '#',
            ],
            [
                "id" => 2,
                'title' => "typu studio",
                'image' => "/assets/images/gorskie_klimaty-15.jpg",
                'persons' => '4',
                'link' => '#',
            ],
            [
                "id" => 3,
                'title' => "z 1 sypialnią",
                'image' => "/assets/images/gorskie_klimaty-5.jpg",
                'persons' => '5',
                'link' => '#',
            ],
            
        ];


        return view('pages.home.index',['apartments'=>$apartments]);
    }
}
