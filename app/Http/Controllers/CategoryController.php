<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryUpdateRequest;
use Illuminate\Http\Request;
use App\Category;
use Image;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $categories = Category::withTrashed()->paginate(20);
        
        return view('categories.index',compact('categories'));
     
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
        
        return view('categories.create', compact('categories', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category = new Category();
       
        $category->name = $request->input('name');
        $category->slug = Str::slug($category->name);
        $category->status = $request->input('status');
        $category->save();

        if($request->has('image')) {
            $image = $request->file('image');
            $path = 'categories/' . $category->id . '/image/';
            $filename = Str::random(16) . '.' . $image->getClientOriginalExtension();

            $this->imageUpload($image, $path, $filename);

            $category->image = $filename;
        }

        $category->update();
        
        \Toastr::success('Category Created successfully', 'Success', []); 
       
        $category->update();

        return redirect()->route('categories.index');
     
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
        $category = Category::find($id);
        if($category) {
            $statuses = ['Active', 'Inactive'];
        
            return view('categories.create',compact('category', 'statuses'));
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
    public function update(CategoryUpdateRequest $request, $id)
    {
        $category = Category::find($id);
        if($category) {
            $category->name = $request->input('name');
            $category->status = $request->input('status');

            if($request->has('image')) {
                $image = $request->file('image');
                $path = 'categories/' . $category->id . '/image/';
                $filename = Str::random(16) . '.' . $image->getClientOriginalExtension();

                $this->imageUpload($image, $path, $filename);

                $category->image = $filename;
            }

            $category->update();
            
            \Toastr::success('Category Updated successfully', 'Success', []);
            
            return redirect()->route('categories.index');
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
        $category = Category::withTrashed()->find($id);

        if($category) {
            if($request->query('restore') !== null) {
                $category->restore();
            } else {
                $category->delete();
            }
            
            \Toastr::success('Category Deleted successfully', 'Success', []);

            return redirect()->route('categories.index');   
        }
        abort(404);
    }
}
