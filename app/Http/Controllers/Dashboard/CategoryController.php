<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class CategoryController extends Controller
{
    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // select * from categories order by name asc
        $categories=Category::orderBy('name', 'asc')->whenSearch(request()->search)
            ->paginate(5);
        return view('dashboard.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:categories,name'
        ]);

        $request_data = $request->except(['img']);

        if ($request->img) {
            $img = Image::make($request->img)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })
                ->encode('webp', 90);
            Storage::disk('public')->put('categories/'. $request->img->hashName(), (string)$img, 'public');
            $request_data['img'] = $request->img->hashName();
        }
        Category::create($request_data);
        session()->flash('success','Successfully Created !');
        return redirect()->route('dashboard.categories.index');
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
        $category=Category::findOrFail($id);
        return view('dashboard.categories.edit',compact('category'));

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
        $request->validate([
            'name'=>'required|unique:categories,name,' . $id
        ]);
        $category=Category::find($id);
        $request_data = $request->except(['img']);
        if ($request->img) {
            Storage::disk('public')->delete('categories/' . $category->img);
            $img = Image::make($request->img)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })
                ->encode('webp', 90);
            Storage::disk('public')->put('categories/'. $request->img->hashName(), (string)$img, 'public');
            $request_data['img'] = $request->img->hashName();
        }

        $category->update($request_data);

        session()->flash('success','Successfully updated !');
        return redirect()->route('dashboard.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::findOrFail($id);
        $category->delete();

        session()->flash('success','Successfully deleted !');
        return redirect()->route('dashboard.categories.index');
    }
}
