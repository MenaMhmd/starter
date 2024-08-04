<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers;

class Admincontroller extends Controller
{
    public function adminshow()
    {
        return 'show';
    }
    public function show1()
    {
        return 'show1';
    }
    public  function show2()
    {
        return 'show2';
    }

}
