<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    private  $apartments = [
        [
            "id" => 1,
            'title' => "typu Standard",
            'image' => "/assets/images/apartments/standard/apartament_standard-7.jpg",
            'persons' => '5',
            'size'=> '37',
            'description'=>"Nasz apartament typu Standard w Zakopanem to idealne miejsce dla poszukiwaczy górskiego spokoju. Eleganckie wyposażenie, w tym aneks kuchenny i łazienka, zapewniają komfortowy wypoczynek, a duże łóżko i rozkładana sofa są gwarancją odprężenia po dniu pełnym wrażeń.",
            'link' => '#',
        ],
        [
            "id" => 2,
            'title' => "typu Studio",
            'image' => "/assets/images/apartments/studio/apartament_studio-7.jpg",
            'persons' => '3',
            'size'=> '20',
            'description'=>"Apartament Studio to Twoje miejsce na mapie Zakopanego, gdzie nowoczesność łączy się z tradycją. Oddaj się relaksowi w eleganckim zakwaterowaniu, wyposażonym w bezpłatne Wi-Fi, klimatyzację i prywatny parking, nieopodal centrum pełnego atrakcji.",
            'link' => '#',
        ],
        [
            "id" => 3,
            'title' => "z 1 sypialnią",
            'image' => "/assets/images/apartments/onebedroom/apartament_1sypialnia-4.jpg",
            'persons' => '7',
            'size'=> '55',
            'description'=>"Przestronny apartament z jedną sypialnią to synonim luksusu i wygody. Oferuje balkon z malowniczym widokiem oraz pełne wyposażenie, które umożliwia samodzielne przygotowywanie posiłków i pełną niezależność, zapewniając niezapomniane chwile podczas pobytu w sercu Tatr.",
            'link' => '#',
        ],

    ];
    public function home()
    {

        return view('pages.home.index', ['apartments' => $this->apartments]);
    }

    public function about()
    {
        return view('pages.about.index');
    }

    public function apartments()
    {

        return view('pages.apartments.index', ['apartments' => $this->apartments]);
    }

    public function attractions()
    {
        return view('pages.attractions.index');
    }
}
