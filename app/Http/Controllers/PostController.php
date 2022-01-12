<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Request $request){


        $nombrebusca = $request->get('buscarpor');
        $losposts = Posts::where('titulo', 'LIKE', "%$nombrebusca%")->orwhere('descripcion', 'LIKE', "%$nombrebusca%")->paginate(10);

        //$losposts = DB::table('posts')->select('id', 'titulo', 'descripcion', 'created_at');

        //$losposts = Posts::all();

        return view('posts.index', compact('losposts'));
        //return view('posts.index', ['losposts' => $losposts]);
    }

    public function create(){
        
        return view('posts.create');
    }

    public function store(Request $request){
/*
        $posteo = new Posts($request->all());

        $posteo->titulo = $request->titulo;
        $posteo->slug = $request->slug;
        $posteo->descripcion = $request->descripcion;
        $posteo->foto = $request->foto;

        $posteo->save();*/


        $request->validate([
            'titulo' => 'required', 'slug' => 'required', 'descripcion' => 'required', 'foto' => 'required|image|mimes:jpeg,png'
        ]);

        $row = $request->all();

        if ($foto = $request->file('foto')){
            $rutaGuardarImg = 'foto/';
            $fotoNombre = date('YmdHis'). "." . $foto->getClientOriginalExtension();
            $foto->move($rutaGuardarImg, $fotoNombre);
            $row['foto'] = "$fotoNombre";
        }

        Posts::create($row);

        return redirect()->route('posts.index');
    }


    public function destroy(Posts $borra){


        $borra -> delete();
        return redirect()->route('posts.index');
    }


}
