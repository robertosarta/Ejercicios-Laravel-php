<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $name = 'Roberto Martinez Resano';
        $lastBook = 'Hades el dios menos malo';
        return view('about', compact('name', 'lastBook'));        
    }
}