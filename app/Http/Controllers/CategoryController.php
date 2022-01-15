<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index(){
        return view('category', [
            'category' => Category::with('posts')->get(),
            'page'     => 'category'
        ]);
    }

     public function show(Category $category){
        return view('posts', [
            'posts' => $category->posts->load('category'),
            'name' => $category->name,
            'page' => 'category'
        ]);
    }
}
