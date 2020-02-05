<?php

namespace App\Http\Controllers;

use App\mensajes;
use Illuminate\Http\Request;

class MensajesController extends Controller
{
   
    public function index()
    {
        $datos1 = Mensajes::all();
        return view('mensajes.index',compact('datos1'));
    }

    
    public function create()
    {
       //
    }

   
    public function store(Request $request)
    {
        $datos = request()->except('_token');
        Mensajes::insert($datos);
        
        return back();
    }

   
    public function show(mensajes $mensajes)
    {
    
    }


    public function edit(mensajes $mensajes)
    {
        
    }

    public function update(Request $request, mensajes $mensajes)
    {
        
    }

    
    public function destroy(mensajes $mensajes)
    {
        
    }
}
