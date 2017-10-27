<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function search(){
        $data['property'] = $_GET['select-property'];
        $data['bussiness'] = $_GET['select-bussiness'];
        $post = new Post;
        return $post->getAll($data);     
    }

    public function find(){
        $data = $_GET['id'];
        $post = new Post;
        return $post->find($data);
        
    }

    public function new(){
        $data['fecha'] = $_POST['fecha'];
        $data['bano'] = $_POST['bano'];
        $data['dormitorio'] = $_POST['dormitorio'];
        $data['m2'] = $_POST['m2'];
        $data['estacionamiento'] = $_POST['estacionamiento'];
        $data['ciudad'] = $_POST['ciudad'];
        $data['valor'] = $_POST['valor'];
        $data['tipo'] = $_POST['tipo'];
        $data['negocio'] = $_POST['negocio'];
        $data['descripcion'] = $_POST['descripcion'];
        $data['estado'] = $_POST['estado'];
        $post = new Post;
        $post->new($data);
    }
}
