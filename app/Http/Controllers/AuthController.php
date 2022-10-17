<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return[
            'NIS' => 3103120198,
            'Name' => 'Rikza Haris Insyira',
            'Phone' => '0895391728752',
            'class' => 'XII RPL6'
        ];
    }
}   
 