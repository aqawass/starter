<?php

namespace App\Http\Controllers\Front;

use \stdClass;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{

    public function showUserName() {
        return 'Ahmad Emam';
    }

    public function getIndex() {
        $obj = new \stdClass();
        $obj->name='Ali';
        $obj->id=5;
        $obj->gendar='male';
        return view('welcome',compact('obj'));
    }

}
