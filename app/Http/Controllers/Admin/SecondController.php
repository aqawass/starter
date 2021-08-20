<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SecondController extends Controller
{
    //

    public function showString() {
        return 'static string ';
    }
}
