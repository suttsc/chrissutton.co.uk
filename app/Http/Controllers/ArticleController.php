<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('article.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $article): View
    {
        return view('article.show', [
            'article' => $article,
        ]);
    }
}
