<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{


    public function getindex()
    {
        $data=[];
        $data['id']=5;
        $data['name']='mm';
     return view('welcome',$data);
    }
}
