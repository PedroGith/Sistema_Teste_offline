<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProdutoController extends Controller
{
  
public function novo(Request $request)
{

   return view('add');

}

  public function inserir(Request $request)
{
    dd($request->all());
}

}


