<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function index()
    {
        $sports = ['Fútbol', 'Baloncesto', 'Tenis', 'Pádel', 'Natación'];
        return view('sports', compact('sports'));
    }
}