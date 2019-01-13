<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function index($name, $nickname=null)
    {

            if ($nickname){
                return "jelou {$name}, tu apodo es: {$nickname}";
            } else{
                return 'jelou '.$name;
            }

    }
}
