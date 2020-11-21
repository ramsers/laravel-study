<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class PostsController extends Controller
{
    public function show() 
    {
    
        Route::get('/', function () { return view('welcome'); });
    }
}
