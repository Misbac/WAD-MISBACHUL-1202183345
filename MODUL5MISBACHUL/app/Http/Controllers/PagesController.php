<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
      return view('modul5.home');
    }
    public function product(Request $request)
    {
      return view('modul5.product');
    }
    public function order()
    {
      return view('modul5.order');
    }
    public function history()
    {
      return view('modul5.history');
    }
    public function inputproduct()
    {
      return view('modul5.inputproduct');
    }
    public function listproduct()
    {
      return view('modul5.listproduct');
    }
}
