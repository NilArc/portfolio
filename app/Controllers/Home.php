<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {php spark help memory_get_peak_usage
        return view('welcome_message');
    }


}
