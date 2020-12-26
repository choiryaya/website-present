<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use\App\Equipment;
use Illuminate\Http\Request;


class EquipmentController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Equipment::all();
        return view('admin.template.equipment.index',compact($model));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.template.equipment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'cover' => 'file|image',
        ]);
        //kalau gaada cover
        $cover = null;
        //simpan gambar
        if($request->hasFile('cover')){
           $cover = $request->file('cover')->store('public/assets/covers');
        }
        //untuk fungsi create
        Equipment::create([
            'name' => $request->name,
            'description' => $request->description,
            'cover' => $cover,
        ]);
        return redirect()->route('equipment.index')->withSuccess('Books data has been saved');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
