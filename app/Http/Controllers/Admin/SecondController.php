<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SecondController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except('showString2');
    }
    public function showString0() {
        return 'static string 0';
    }
    public function showString1() {
        return 'static string 1';
    }
    public function showString2() {
        return 'static string 2';
    }
    public function showString3() {
        return 'static string 3';
    }
}
