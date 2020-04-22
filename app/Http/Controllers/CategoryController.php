<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoryRequest;
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
 
        $categories = Category::paginate(20);
        
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
        $categories = Category::find($id);
        $statuses = ['Active', 'Inactive'];
        return view('categories.create',compact('categories', 'statuses'));
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
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->save();
        \Toastr::success('Point Update successfully', 'Success', []);
        
        return redirect()->route('categories.index')
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
        $category = Category::find($id);

        $category->delete();
        \Toastr::success('Department Deleted successfully', 'Success', []);

        return redirect()->route('categories.index')
                        ->with('success','Point deleted successfully');
    }
}
