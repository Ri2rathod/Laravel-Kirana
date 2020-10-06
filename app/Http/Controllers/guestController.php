<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class guestController extends Controller
{
    function index()
    {
        return view('index');
    }
    function product()
    {
        return view('product');
    }
    function login()
    {
        return view('login');
    }
}
