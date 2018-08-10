<?php

namespace App\Http\Controllers;


interface InterfaceNew
{
    const iva=0.21;

    function calculaPrecio($baseImponible);
    function imprimePrecio($total);
}
