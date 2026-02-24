<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home() { return view('front.index'); }
    public function about() { return view('front.about'); }
    public function services() { return view('front.services.index'); }
    public function serviceShow() { return view('front.services.show'); }
    public function contact() { return view('front.contact'); }
}
