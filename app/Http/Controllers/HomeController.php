<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Home;

class HomeController extends Controller
{
    
    public $dadosHome;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Home $home)
    {
    	$this->dadosHome = $home;
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function teste()
    {
    	$dados = $this->dadosHome->getDados();
        return View('home', ['dados' => $dados]);
    }
}
