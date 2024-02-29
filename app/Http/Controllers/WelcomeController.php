<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello () {
        return 'hello';
    }

    // public function greeting (){
    //     return view ('blog.hello', ['name' => 'Shafa Rafazanda']);
    // }

    public function greeting (){
        return view ('blog.hello')
        ->with('name', 'Shafa Rafazanda')
        ->with ('occupation', 'Hitman');
    }

}
