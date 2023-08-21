<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * La store méthode sert à insérer les éléments dans la DB
     *  Article c'est le model qui intéragit avec nos tables : ses données sont stockés dans $article variable
     * ArticleRequest : nous aide à récupérer les données saisies par le user
     */
    public function store(Article $article, ArticleRequest $request)
    {
        // Requête de création
        $article::create([
            // Dans la variable 'titre' sera stocké les données de la $requête->titre
            'titre' => $request->titre,
            'description' => $request->description,
            'user_id' => Auth::id()
        ]);

        // Nous renvoie à la page d'accueil avec un message de confirmation
        return redirect()->back()->with('success', 'Article ajouté');
        // return redirect()->route('accueil')->with('success', 'Article ajouté');
    }

    // La méthode d'affichage des élémentds de la DB
    public function index()
    {
        // Requête en Laravel pour récupérer tous les éléments disponibles équivaut à <SELECT * FROM DBNAME....>
        $articles = Article::all();

        // La vue à afficher
        return view('accueil', [
            'articles' => $articles
        ]);
    }

    // Afficher un seul article
    // public function show($id){
    //     // Rechercher un élément dans la DB en utilisant l'id
    //     $article = Article::find($id);

    //     return view('articles.show', [
    //         'article' => $article
    //     ]);
    // }

    // Méthode 2 avec ELoquent
    public function show(Article $article)
    {
        // Cette vue sert à afficher l'article
        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function edit(Article $article)
    {
        // articles.edit : ou encore dossier articles/edit.blade.php
        return view('articles.edit', [
            'article' => $article
        ]);
    }

    public function update(Article $article, ArticleRequest $request)
    {
        $article->titre = $request->titre;
        $article->description = $request->description;

        // Pour écraser les données existantes
        $article->save();

        return redirect('/accueil')->with('success', 'L\'article a été mis à jour');
    }

     public function delete(Article $article)
    {
        $article->delete();
        return redirect('/accueil')->with('success', 'L\'article a été supprimé');
    }

    public function mine(){
        $myArticles = Article::where('user_id', Auth::id())->get();

        return view('articles.mine', [
            'my_articles' => $myArticles
        ]);
    }
}