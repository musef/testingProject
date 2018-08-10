<?php

namespace App\Http\Controllers;

use App\models\Banks;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=new Banks();
        $undata=$datas->where('id',1)->first();

        (is_object($undata))  ? $data=$undata->name : $data=null;

        $newc=new NewController();
        $valor=$newc->calculaPrecio(100);
        $data=$newc->imprimePrecio($valor);

        return view('home')->with('data',$data);
    }
}
