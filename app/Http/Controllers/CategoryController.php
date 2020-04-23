<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Category;
use Image;

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
        $category->status = $request->input('status');
        $category->save();
        \Toastr::success('Point Created successfully', 'Success', []);
     
        if($request->hasfile('profile'))
        {
            $file = $request->file('profile');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.' .$extension;
            $category->profile = $filename;
           
            $data = $request->profile_picture;
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);

            $public_storage_path = 'app/public/';
            $path = 'categories/' . $category->id . '/';
            $app_path = storage_path($public_storage_path . $path);
            if (!file_exists($app_path)) {
                \File::makeDirectory($app_path, 0777, true);
            }
            // $file->move($app_path, $filename);
            file_put_contents($app_path.$filename, $data);
        
           
    
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
