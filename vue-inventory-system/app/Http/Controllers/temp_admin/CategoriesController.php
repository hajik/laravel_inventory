<?php

namespace App\Http\Controllers\temp_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\temp_admin\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::
        orderby('created_at','DESC')
        ->paginate(10);

        return view('temp_admin.master.categories.index', compact('categories'));
        // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temp_admin.master.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2|max:50|unique:categories',
        ]);
    
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        flash('Category created succefully!')->success();
        return redirect()->route('categories.index');
        // ->with('success','Category created successfully.');

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
        $category = Category::findOrFail($id);
        return view('temp_admin.master.categories.edit', compact('category'));
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
        $this->validate($request, [
            'name' => 'required|min:2|max:50|unique:categories,name,'. $id
        ]);

        $category = Category::findOrfail($id);
        $category->name = $request->name;
        $category->save();

        flash('Category updated succefully!')->success();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrfail($id);
        $category->delete();

        
        flash('Category deleted succefully!')->success();
        return redirect()->route('categories.index');

    }
}
