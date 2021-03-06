<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
    * Show the application dashboard.
    */
    public function index(Request $request): View
    {
        $posts = Post::paginate(6);
        return view('posts.index', [
            'posts' => $posts,
            'title' => "Blog"
        ]);
        }
        
        /**
        * Display the specified resource.
        */
        public function show(Request $request, int $post): View
        {
            $posts = Post::find($post);
            // dd($posts);
            return view('posts.show', [
                'post' => $posts,
               
                ]);
            }
        }