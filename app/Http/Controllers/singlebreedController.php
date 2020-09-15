<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class singlebreedController extends Controller
{
     public function singlebreed($id){
        $client = new Client([
            'headers' => ['content-type' => 'application/json', 'Accept' => 'application/json'],
        ]);

        $response = $client->request('GET', 'https://api.thecatapi.com/v1/images/search/', [
            'json'=> [
                'code' => '9283ca17-bdb9-41c6-9641-3a5f1cef99e2',
            ],
        ]);
        $data = $response->getBody(); 
        $data = json_decode($data);

        //   dd($data);
    //    $data = ['data'=>$data];
    // dd($data);
         return view('pages.singlebreeds')->with('data', $data);
     }

}
