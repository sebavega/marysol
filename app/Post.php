<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Post extends Model
{
    protected $table = 'posts';
    public $timestamps = false;

    public function new($request)
    {
        $post = new Post;
        $post->fecha = $request->fecha;
        $post->bano = $request->bano;
        $post->dormitorio = $request->dormitorio;
        $post->m2 = $request->m2;
        $post->estacionamiento = $request->estacionamiento;
        $post->ciudad = $request->ciudad;
        $post->valor = $request->valor;
        $post->tipo = $request->tipo;
        $post->negocio = $request->negocio;
        $post->descripcion = $request->descripcion;
        $post->estado = $request->estado;
        $post->save();
    }
/*
    public function update($request)
    {
        $post = App\Post::find($request['id']);
        $post->fecha = $request->fecha;
        $post->bano = $request->bano;
        $post->dormitorio = $request->dormitorio;
        $post->m2 = $request->m2;
        $post->estacionamiento = $request->estacionamiento;
        $post->ciudad = $request->ciudad;
        $post->valor = $request->valor;
        $post->tipo = $request->tipo;
        $post->negocio = $request->negocio;
        $post->descripcion = $request->descripcion;
        $post->estado = $request->estado;
        $post->save();
    }
*/
    public function find($request)
    {
        $post = App\Post::find($request->id);
        return $post;
    }

    public function getAll($request)
    {
        if($request['property'] == 'todos' & $request['bussiness'] == 'todos'){
            $post = new Post;
            return $post::all();
        } else{
            $post = new Post;
            return $post::all()->where(
                ['tipo', $request['property']],
                ['negocio', $request['bussiness']]
            )->get();
        }
        
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }
}
