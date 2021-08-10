<?php

namespace App\Http\Controllers\temp_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\temp_admin\Size;

class SizesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes = Size::
        select('id','name','created_at')
        ->orderby('created_at','DESC')
        ->paginate(10);

        return view('temp_admin.master.sizes.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temp_admin.master.sizes.create');
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
            'name' => 'required|min:1|max:50|unique:sizes',
        ]);
    
        $size = new Size();
        $size->name = $request->name;
        $size->save();

        flash('Size created succefully!')->success();
        return redirect()->route('sizes.index');
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
        $size = Size::findOrFail($id);
        return view('temp_admin.master.sizes.edit', compact('size'));
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
            'name' => 'required|min:1|max:50|unique:sizes,name,'. $id
        ]);

        $size = Size::findOrfail($id);
        $size->name = $request->name;
        $size->save();

        flash('Size updated succefully!')->success();
        return redirect()->route('sizes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $size = Size::findOrfail($id);
        $size->delete();
        
        flash('Size deleted succefully!')->success();
        return redirect()->route('sizes.index');
    }
}
