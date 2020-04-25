<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class PublicController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('pages.index', compact('categories'));
    }
  
    public function industries_servied()
    {
        $categories = Category::all();
        return view('pages.industries-servied', compact('categories'));
    }

    public function industries_servied_valves()
    {
        $categories = Category::all();
        return view('pages.industries-servied-valves', compact('categories'));
    }

    public function products($slug)
    {
    	$category = Category::where('slug', $slug)->first();
    	if($category) {
    		$products = Product::where('category_id', $category->id)->get();
    		
        	return view('pages.products', compact('products'));
    	}
     	
     	abort(404);   
    }
}
