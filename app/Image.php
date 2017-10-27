<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;

class Image extends Model
{
    protected $table = 'images';
    public $timestamps = false;

    public function new(Request $request)
    {
        $image = new Image;
        $image->post_id = $request->post_id;
        //exist?
        if( isset($request->main) )
        {
            $image->main = $request->main;
        }
        $image->ruta = $request->ruta;
        $image->descripcion = $request->descripcion;

        $image->save();
    }

    public function update(Request $request)
    {
        $image = App\Image::find($request->id);
        //exist?
        $image->main = $request->main;
        $image->ruta = $request->ruta;
        $image->descripcion = $request->descripcion;

        $image->save();
    }

    public function find(Request $request)
    {
        $image = App\Image::find($request->id);
        return $image;
    }

    public function getAll(Request $request)
    {
        $image = App\Image::all()->where('post_id', $request->post_id);
        return $image;
    }

    public function delete(Request $request)
    {
        //agregar codigo para eliminar del servidor
        $image = App\Image::find($request->id);
        $image->delete();
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
