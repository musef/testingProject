<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller implements InterfaceNew
{
    //
    function calculaPrecio($baseImponible)
    {
        return ($baseImponible*(1+iva));
    }

    function imprimePrecio($total)
    {
        echo '<br>El precio total del producto es: $total IVA incluido';
    }


}
