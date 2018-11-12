<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    /**
    * Show the application dashboard.
    */
    public function index(Request $request): View
    {
       
        return view('services.index', [
            'title' => "Service",
            'pagename' => "Service",
            'imgurl' => "img/full/03.jpg"
        ]);
        }
        
        /**
        * Display the specified resource.
        */
        public function show(Request $request, Post $post): View
        {
            
            return view('posts.show', [
                'posts' => $posts
                ]);
            }
        }