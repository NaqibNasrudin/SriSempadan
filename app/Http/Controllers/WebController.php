<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function indexAbout(){
        return view('about');
    }
    public function indexDev(){
        return view('dev');
    }
    public function indexCarta(){
        return view('carta');
    }
    public function indexAktiviti(){
        return view('aktiviti');
    }
    public function indexGaleri(){
        return view('gallery');
    }

    public function indexMasyarakat(){
        return view('aktiviti.kemasyarakatan');
    }
    public function indexAgama(){
        return view('aktiviti.keagamaan');
    }
    public function indexEkonomi(){
        return view('aktiviti.ekonomi');
    }
    public function indexPrasarana(){
        return view('aktiviti.prasarana');
    }
    public function indexRiadah(){
        return view('aktiviti.riadah');
    }
}
