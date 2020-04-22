<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Image;

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
        $product->category_id=$request->input('category');
        $product->status = $request->input('status');
        $product->save();
        \Toastr::success('Point Created successfully', 'Success', []);
     
        if($request->hasfile('profile'))
        {
            $file = $request->file('profile');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.' .$extension;
            $product->profile = $filename;
           
            $data = $request->profile_picture;
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);

            $public_storage_path = 'app/public/';
            $path = 'products/' . $product->id . '/';
            $app_path = storage_path($public_storage_path . $path);
            if (!file_exists($app_path)) {
                \File::makeDirectory($app_path, 0777, true);
            }
            $file->move($app_path, $filename);
            // file_put_contents($app_path.$filename, $data);
        
           
    
        //   thumbnail resize image
            // $sizes = [32, 64, 128];
            // foreach ($sizes as $size) {
            //     $public_storage_path = 'app/public/';
            //     $thumbnailPath = ('users/' . $user->id . '/'.$size."/");
            //     $thumb_path = storage_path($public_storage_path . $thumbnailPath);
            //     $file = storage_path($thumb_path, $filename);
            //     if (!file_exists($thumb_path)) {
            //         \File::makeDirectory($thumb_path, 0777, true);
            //     }
            //     \Image::make($app_path. '/' .$filename)
            //     ->resize(null,$size, function ($constraint) {
            //         $constraint->aspectRatio();
            //     })->save($thumb_path. '/' .$filename);
            // }
        }
    
      
       
        $product->update();

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
