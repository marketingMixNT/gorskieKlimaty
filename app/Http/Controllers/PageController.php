<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{

    private function imageCollection(string $apartment)
    {

        $images = File::files(public_path("/assets/images/apartments/{{$apartment}}/"));

        $imagesArray = collect($images)->map(function ($image) {
            return asset(str_replace(public_path(), '', $image->getPathname()));
        })->shuffle()->toArray();

        return $imagesArray;
    }

    private  $apartments = [
        [
            "id" => 1,
            'title' => "typu Standard",
            'image' => "/assets/images/apartments/standard/apartament_standard-7.jpg",
            'persons' => '5',
            'size' => '37',
            'description' => "Nasz apartament typu Standard w Zakopanem to idealne miejsce dla poszukiwaczy górskiego spokoju. Eleganckie wyposażenie, w tym aneks kuchenny i łazienka, zapewniają komfortowy wypoczynek, a duże łóżko i rozkładana sofa są gwarancją odprężenia po dniu pełnym wrażeń.",
            'link' => 'apartments.standard'
        ],
        [
            "id" => 2,
            'title' => "typu Studio",
            'image' => "/assets/images/apartments/studio/apartament_studio-7.jpg",
            'persons' => '3',
            'size' => '20',
            'description' => "Apartament Studio to Twoje miejsce na mapie Zakopanego, gdzie nowoczesność łączy się z tradycją. Oddaj się relaksowi w eleganckim zakwaterowaniu, wyposażonym w bezpłatne Wi-Fi, klimatyzację i prywatny parking, nieopodal centrum pełnego atrakcji.",
            'link' => 'apartments.studio',
        ],
        [
            "id" => 3,
            'title' => "z 1 sypialnią",
            'image' => "/assets/images/apartments/onebedroom/apartament_1sypialnia-4.jpg",
            'persons' => '7',
            'size' => '55',
            'description' => "Przestronny apartament z jedną sypialnią to synonim luksusu i wygody. Oferuje balkon z malowniczym widokiem oraz pełne wyposażenie, które umożliwia samodzielne przygotowywanie posiłków i pełną niezależność, zapewniając niezapomniane chwile podczas pobytu w sercu Tatr.",
            'link' => 'apartments.one_bedroom',
        ],

    ];

    private $amenities = [
        [
            'icon' => 'assets/icons/amenities/shower.svg',
            'name' => 'Prysznic'
        ],
        [
            'icon' => 'assets/icons/amenities/heating.svg',
            'name' => 'Ogrzewanie'
        ],
        [
            'icon' => 'assets/icons/amenities/coffee.svg',
            'name' => 'Ekspres do kawy'
        ],
        [
            'icon' => 'assets/icons/amenities/iron.svg',
            'name' => 'Sprzęt do prasowania'
        ],
        [
            'icon' => 'assets/icons/amenities/wardrobe.svg',
            'name' => 'Szafa/garderoba'
        ],
        [
            'icon' => 'assets/icons/amenities/highchair.svg',
            'name' => 'Krzesełko dla dzieci'
        ],
        [
            'icon' => 'assets/icons/amenities/dryer.svg',
            'name' => 'Suszarka do włosów'
        ],
        [
            'icon' => 'assets/icons/amenities/boiler.svg',
            'name' => 'Czajnik elektryczny'
        ],
        [
            'icon' => 'assets/icons/amenities/kitchen.svg',
            'name' => 'Aneks kuchenny'
        ],
        [
            'icon' => 'assets/icons/amenities/microwave.svg',
            'name' => 'Kuchenka mikrofalowa'
        ],
        [
            'icon' => 'assets/icons/amenities/fridge.svg',
            'name' => 'Lodówka'
        ],
        [
            'icon' => 'assets/icons/amenities/dishwasher.svg',
            'name' => 'Zmywarka'
        ],
        [
            'icon' => 'assets/icons/amenities/tv.svg',
            'name' => 'Telewizor płaskoekranowy'
        ],
        [
            'icon' => 'assets/icons/amenities/spoon.svg',
            'name' => 'Przybory kuchenne'
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

    public function standard()
    {

        $imagesArray = $this->imageCollection('standard');

        $apartment = $this->apartments[0];

        $otherApartments = collect($this->apartments)->filter(function ($apartment) {
            return $apartment['id'] == 2 || $apartment['id'] == 3;
        })->values();

        return view('pages.apartments.standard.index', ['images' => $imagesArray, 'amenities' => $this->amenities, 'apartment' => $apartment, 'otherApartments' => $otherApartments]);
    }
    public function studio()
    {

        return view('pages.apartments.studio.index');
    }
    public function one_bedroom()
    {

        return view('pages.apartments.one_bedroom.index');
    }

    public function attractions()
    {
        return view('pages.attractions.index');
    }
}
