<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catogory;
class Relation extends Controller
{
    public function catogories(){
    $catogory = catogory::with('products')->get();
    dd($catogory);
  //return view('',compact('catogory'));
    }
}
