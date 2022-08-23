<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherAPIController extends Controller
{
    public function weatherData() {

        return view('weatherDate');
    }
}

