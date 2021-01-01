<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class HomeController extends Controller
{
   public function index(){

       return view('index');
   }

}
