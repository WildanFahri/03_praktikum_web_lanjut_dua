<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('index', compact('posts'));
    }
    public function products() {
        return view('products');
    }
    public function about() {
        return view('about');
    }
    public function contact() {
        return view('contact');
    }
    public function services() {
        return view('services');
    }
    public function gallery() {
        return view('gallery');
    }
}
