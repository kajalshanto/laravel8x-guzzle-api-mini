<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GuzzleClientController extends Controller
{
    public function getAllData(){
        $posts = Http::get('https://reqres.in/api/users');
        return view('post', ['posts'=> $posts['data']]); 
    }

    public function getSingleData($id){
        $user = Http::get('https://reqres.in/api/users/'.$id);
        return view('singlepost', ['user'=> $user['data']]); 
    }
}
