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

    public function industries_servied_valves($id)
    {
        $categories = Category::all();
        $products = Product::find([$id]);
        return view('pages.industries-servied-valves', compact('categories', 'products' ));
   
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
        	return view('pages.products', compact('products', 'categories', 'category'));
    	}
     	
     	abort(404);   
    }

    public function sendMail(Request $request)
    {
        try {
            $to = ["jhalakjaviya@gmail.com", "kaushal.z@matrixmob.com"];
            $email = "jhalak@matrixmob.com";
            $contact = $request->input('contact');
            $name = $request->input('name');
            $title = 'New Inquiry';
            $message = $request->input('message');
            $file = $request->file('dfile');

            $app_path = public_path() . '/data';

            if($file !== null) {
                $file = $this->createFile($app_path, $file);
            }

            $php = \Blade::compileString('<h3>New Inquiry,</h3><br/><br/>Name: <b>{{$name}}</b><br/>Contact No: <b>{{$contact}}</b> @if($file !== null)<br/>File: <b><a href="{{$file}}">File Link</a></b> @endif <br/>Message: <b>{{$message}}</b>');

            $email_body = $this->render($php, ['name' => $name, 'contact' => $contact, 'file' => $file, 'message' => $message]);

            \Mail::send([], [], function ($final_message) use ($to, $title, $email_body, $email, $name) {
                $final_message->setBody($email_body, 'text/html');
                $final_message->to($to)->subject($title);
                $final_message->from($email, $name);
            });

            \Toastr::success('Message submitted successfully', 'Success', []);
        } catch (\Exception $e) {
            \Toastr::success('Something went wrong', 'Error', []);
        }

        return redirect()->back();
    }
}
