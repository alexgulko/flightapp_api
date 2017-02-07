<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\App;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function apiGate() {
        $wsdlUrl = 'http://flightxml.flightaware.com/soap/FlightXML2/wsdl';
        $options = [
            'trace' => true,
            'exceptions' => 1,
            'login' => env('FLIGHTWARE_API_LOGIN'),
            'password' => env('FLIGHTWARE_API_PASSWORD')
        ];
        $client = new \SoapClient($wsdlUrl, $options);
        return $client;
    }
}
