<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        /*-----Renvoyer une vue avec des paramètres-----
        // $title = 'Mon super title';
        // $title2 = 'Mon super title';
        // return view('articles', compact('title', 'title2'));
        // return view('articles')->with('title1', $title);

        // return view('articles', [
        //     'title' => $title,
        //     'title2' => $title2
        // ]);

        // $posts = [
        //     'Mon super premier titre',
        //     'mon super second titre'
        // ];
        // return view('articles', compact('posts'));*/


        #----Pour récupérer tous les éléments de la DB avec eloquant-------
        $posts = Post::all();
        // dd($posts);
        return view('articles', [
            'posts' => $posts
        ]);

    }

    public function show($id)
    {

        /* -----Renvoyer une vue avec des paramètres-----
        // $posts = [
        //     1 => 'Mon titre n°1',
        //     2 => 'Mon titre n°2'
        // ];
        // $post = $posts[$id] ?? 'pas de titre';           -> vérifie si l'ID existe */

        # ------Récupérer les paremetrès avec l'id rentré et fournir une 404 si l'id n'existe pas-----
        // $post = Post::findOrFail($id); 

        $post = Post::where('title', '=', 'Sint iusto dolor quo adipisci.')->first();
        // dd($post);

        #Retourne la vie avec l'iD
        return view('article', [
            'post' => $post
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}