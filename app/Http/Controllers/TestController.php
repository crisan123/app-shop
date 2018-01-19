<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //ESTO ES UN CONTROLLER
    // Y VAMOS A CREAR UN METODO PARA EL EJEMPLO
    /*EN ESTE CONTROLADOR CREAMOS UN METODO  EN ESTE CASO PARA CONTROLAR LAS RUTAS DE LAS PAGINAS DE NUESTRA APLICAICON EN ESTE CASO LA PAGINA RAIZ LLAMADA WELCOME.
    */

    public function welcome()
    {
    	return view('welcome');
    }

    /* ESTA FUNCION LA USAMOS PARA RETORNAR DATOS HACIA NUESTRA HTML.

     public function numeros()
    {
    	$a = 5;
    	$b = 11;
    	$c = 0;
    	$c = $a + $b;
    	return "El valor de la suma es $c";
    }*/
}
