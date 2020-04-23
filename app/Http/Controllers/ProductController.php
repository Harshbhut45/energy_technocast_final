<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Image;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->paginate(20);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $statuses = ['Active', 'Inactive'];
        return view('products.create', compact('categories', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = new Product();
       
        $product->name = $request->input('name');
        $product->slug = Str::slug($product->name);
        $product->category_id = $request->input('category');
        $product->status = $request->input('status');
        $product->save();

        if($request->has('image')) {
            $image = $request->file('image');
            $path = 'products/' . $product->id . '/image/';
            $filename = Str::random(16) . '.' . $image->getClientOriginalExtension();

            $this->imageUpload($image, $path, $filename);

            $product->image = $filename;
        }
        
        $product->update();

        \Toastr::success('Product Created successfully', 'Success', []);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $products = Product::find($id);
        $categories = Category::all();
        $statuses = ['Active', 'Inactive'];
        
        return view('products.create',compact('products', 'statuses', 'categories'));
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->category_id=$request->input('category');
        $product->status = $request->input('status');
        $product->save();
        \Toastr::success('Point Update successfully', 'Success', []);
        
        return redirect()->route('home')
                        ->with('success','Department update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();
        \Toastr::success('Department Deleted successfully', 'Success', []);

        return redirect()->route('home')
                        ->with('success','Point deleted successfully');
    }
}
