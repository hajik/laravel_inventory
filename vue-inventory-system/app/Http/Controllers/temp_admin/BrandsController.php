<?php

namespace App\Http\Controllers\temp_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\temp_admin\Brand;

use App\Classes\MD5Hasher;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::
        select('id','name','created_at')
        ->orderby('created_at','DESC')
        ->paginate(10);

        return view('temp_admin.master.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temp_admin.master.brands.create');
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
            'name' => 'required|min:2|max:50|unique:brands',
        ]);
    
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->save();

        flash('Brand created succefully!')->success();
        return redirect()->route('brands.index');
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
        $brand = Brand::findOrFail($id);
        return view('temp_admin.master.brands.edit', compact('brand'));
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
            'name' => 'required|min:2|max:50|unique:brands,name,'. $id
        ]);

        $brand = Brand::findOrfail($id);
        $brand->name = $request->name;
        $brand->save();

        flash('Brand updated succefully!')->success();
        return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::findOrfail($id);
        $brand->delete();
        
        flash('Brand deleted succefully!')->success();
        return redirect()->route('brands.index');
    }

    //handle ajax request
    public function getBrandsJson(){
        $brands = Brand::all();

        return response()->json([
            'success' => true,
            'data' => $brands,
        ], Response::HTTP_OK);
    }

}
