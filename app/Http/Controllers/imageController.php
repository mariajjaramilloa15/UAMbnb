<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class imageController extends Controller
{
    public function index(){
        $post = Post::find(1);
        return view('properties.index',compact('properties'));
    }

    public function imageguardar(Request $request){
        $post = new Post();
        $post->nombre = $request->nombre;
        // script para subir la imagen
        if($request->hasFile("imagen")){
            
            $imagen = $request->file("imagen");
            $nombreimagen = Str::slug($request->nombre).".".$imagen->guessExtension();
            $ruta = public_path("img/post/");

            //$imagen->move($ruta,$nombreimagen);
            copy($imagen->getRealPath(),$ruta.$nombreimagen);

            $post->imagen = $nombreimagen;

        }
        $post->save();
    }
}