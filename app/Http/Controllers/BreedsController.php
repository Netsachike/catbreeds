<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class BreedsController extends Controller
{
    public function breeds(){
       $client = new Client([
           'headers' => ['content-type' => 'application/json', 'Accept' => 'application/json'],
       ]);

       $response = $client->request('GET', 'https://api.thecatapi.com/v1/breeds', [
           'json'=> [
               'code' => '9283ca17-bdb9-41c6-9641-3a5f1cef99e2',
           ],
       ]);
       $data = $response->getBody(); 
       $data = json_decode($data);
    //    dd($data);
    //    $data = ['data'=>$data];
    // dd($data);
    return view('pages.breeds')->with('data', $data);

    }
}
