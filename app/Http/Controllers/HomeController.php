<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEOMeta;
use OpenGraph;
use Twitter;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		SEOMeta::setTitle('Follador - Contabilidade',false);
        SEOMeta::setDescription('Contabilidade em Curitiba');
		SEOMeta::setKeywords('Contabilidade em Curitiba');
		SEOMeta::setKeywords('Contabilidade em Curitiba')->addKeyword('Contabilidade Curitiba')->addKeyword('Contador Curitiba')->addKeyword('Contador em Curitiba');
        return view('index');
    }
}
