<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
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
        $products = Product::with('category')->withTrashed()->paginate(20);
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
        $product = Product::find($id);
        if($product) {
            $categories = Category::all();
            $statuses = ['Active', 'Inactive'];
            
            return view('products.create',compact('product', 'statuses', 'categories'));
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, $id)
    {
        $product = Product::find($id);
        if($product) {
            $product->name = $request->input('name');
            $product->category_id = $request->input('category');
            $product->status = $request->input('status');

            if($request->has('image')) {
                $image = $request->file('image');
                $path = 'products/' . $product->id . '/image/';
                $filename = Str::random(16) . '.' . $image->getClientOriginalExtension();

                $this->imageUpload($image, $path, $filename);

                $product->image = $filename;
            }

            $product->update();
            
            \Toastr::success('Product Updated successfully', 'Success', []);
            
            return redirect()->route('home');
        }
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $product = Product::withTrashed()->find($id);

        if($product) {
            if($request->query('restore') !== null) {
                $product->restore();
            } else {
                $product->delete();
            }
            
            \Toastr::success('Product Deleted successfully', 'Success', []);

            return redirect()->route('home');
        }
        abort(404);
    }
}
