<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Tag;
use Validator;
use Illuminate\Http\Request;

// The seven restful controller action

class ArticlesController extends Controller
{
    // Render a list of a resource (loop)
    public function index() 
    {
            
            if(request('tag')) {
                $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
            } else {
                $articles = Article::latest()->get();
            }
            return view('articles.index', ['articles' => $articles]);
    }

    // Show a single resource
    public function show(Article $article)
    {

        return view('articles.show', ['articles' => $article]);
    }
    // Shows a view to create a new resource
    public function create()
    {
        $tags = Tag::all();

        return view('articles.create', ['tags' => $tags]);
    }
    // Persist the new resource
    public function store(Request $request)
    {
        
        $article = new Article($this->validateArticle());
        $article->user_id = 1;
        $article->save();
        $article->tags()->attach(request('tags'));
        return redirect(route('articles-index'));
    }


    // Show a view to edit an existing resource
    public function edit(Article $article)
    {

        return view('articles.edit', ['articles' => $article]);
    }


    // Persist edited resource
    public function update( Article $articles, $id)
    {
        $validatedData = request()->validate([
            'title' => 'required|min:3|max:255',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id' //Protects by making sure the tag or id is on the tags table
        ]);

        $articles = Article::find($id);
        $articles->update($validatedData);

        return redirect(route('articles-show', $articles));
    }

    // Delete the resource
    public function destroy()
    {
        
    }


     // Render List as side loop
     public function about()
     {
         $articles = Article::latest()->get();
 
         return view('articles.about', ['articles' => $articles]);
     }
     
     protected function validateArticle() 
    {
        
        return request()->validate([
            'title' => 'required|min:3|max:255',
            'excerpt' => 'required',
            'body' => 'required',
        ]);
    }
}


