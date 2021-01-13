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

    public function storeData(){
        $response = Http::post('https://reqres.in/api/users', [
            'name' => 'Steve',
            'email' => 'steve123@gmail.com',
            'role' => 'Network Administrator',
        ]);
        return response()->json([
            'message' => 'Store Success!'
        ], 201); 
    }
    public function editData($id){
        return "Need edit form to show data and able to update";
    }
    public function updateData($id){
        $user = Http::put('https://reqres.in/api/users/'.$id);
        return response()->json([
            'message' => 'Update Success!',
            'user'     =>$user
        ], 200);
    }

    public function deleteData($id){
        $user = Http::delete('https://reqres.in/api/users/'.$id);
        return response()->json([
            'message' => 'Delete Success!'
        ], 201); 
    }
}
