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
  
    public function about_us()
    {
        $categories = Category::all();
        return view('pages.about-as', compact('categories'));
    }

    public function technical_capabilities()
    {
        $categories = Category::all();
        return view('pages.technical-capabilities', compact('categories'));
    }

    public function process()
    {
        $categories = Category::all();
        return view('pages.process', compact('categories'));
    }

    public function quality()
    {
        $categories = Category::all();
        return view('pages.quality-assurance', compact('categories'));
    }

    public function industries_servied()
    {
        $categories = Category::all();
        return view('pages.industries-servied', compact('categories'));
    }

    public function industries_servied_valves()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('pages.industries-servied-valves', compact('categories', 'products'));
    }

    public function career()
    {
        $categories = Category::all();
        return view('pages.career', compact('categories'));
    }

    public function contact_us()
    {
        $categories = Category::all();
        return view('pages.contact-us', compact('categories'));
    }

    public function products($slug)
    {
    	$category = Category::where('slug', $slug)->first();
    	if($category) {
    		$products = Product::where('category_id', $category->id)->get();
    		
            $categories = Category::all();
        	return view('pages.products', compact('products', 'categories'));
    	}
     	
     	abort(404);   
    }
}
