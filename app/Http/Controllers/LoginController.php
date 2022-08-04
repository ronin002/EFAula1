<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

use GuzzleHttp\Client;



class LoginController extends Controller
{


    public function login (Request $request){



        info('LoginController START');
        //return $request;

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $email =  $request['email'];
        $pass =  $request['password'];


        $vAPI_Path = 'https://localhost:7224/api/v1/';

        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', "{$vAPI_Path}login", [
            GuzzleHttp\RequestOptions::JSON => [
                'email' => "{$email}",
                'password' =>  "{$pass}"
            ],
            'verify' => false
        ]);

        /*
        $response = Http::post ("{$vAPI_Path}login",[
        'body' => [
            'email' =>  $request['email'],
            'password' =>  $request['password'],
        ]] );
        */

        return "OK1";

        return $response;

        if ($response->status()!=200){
            return 'US';
        }

        $countryCode = $response->json('country_code','US');

        if (empty($countryCode)){
            return 'US';
        }

        return $countryCode;


    }

}
