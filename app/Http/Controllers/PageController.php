<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
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

    public function about()
    {
        return view('about', [
            'title' => "About",
            'pagename' => "About Us",
            'imgurl' => "img/full/02.jpg"
            ]);
    }
    public function testimonials()
    {
        return view('testimonials', [
            'title' => "Testimonials",
            'pagename' => "Their Story about Us",
            'imgurl' => "img/full/03.jpg"
            ]);
    }
    public function login()
    {
        $posts = Post::paginate(6);
        return view('login', [
            'title' => "Login/Register",
            'pagename' => "Log or Register to book",
            'imgurl' => "img/full/03.jpg"
            ]);
    }
        
}