<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome() {
        // Your API key unsplash
        $url = 'https://api.unsplash.com/users/rumburner/collections/?client_id=API_KEY';
        $request = Http::get($url);
        $data = json_decode($request, true);
        $imgData = $data[0]['preview_photos'];
        $rand = rand(0,3);
        $imgURL = $imgData[$rand]['urls']['small'];
        return view('welcome')->with('imgURL', $imgURL);
    }
}
