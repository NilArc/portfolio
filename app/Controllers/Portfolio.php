<?php

namespace App\Controllers;

class Portfolio extends BaseController
{
    public function index(): string
    {
        return view('index');   
    }

    public function me(): string
    {
        return view('me');   
    }

    public function contacts(): string
    {
        return view('contacts');   
    }


}
