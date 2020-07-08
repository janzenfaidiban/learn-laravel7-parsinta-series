<?php

namespace App\Http\Controllers;


class homeController extends Controller
{
  public function index()
  {
    return view('home', ['name' => request('name')]);
  }
}
