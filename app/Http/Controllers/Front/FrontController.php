<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function showFrontPage(){
        return view('front.front');
    }
    public function showBrowsPage(){
        return view('front.brows');
    }
}
