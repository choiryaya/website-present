<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\RFID;
use Illuminate\Http\Request;

class RfidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.template.rfid.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.template.rfid.create');
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
            'school' => 'required',
        ]);
        RFID::create([
            'name' => $request->name,
            'school' => $request->school,
        ]);
        return redirect()->route('rfid.index')->with('success','RFID data has been saved');
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
    public function edit(RFID $rfid)
    {
        return view('admin.template.rfid.edit',[
            'title' => 'Perpustakaan | Edit RFID Data',
            'rfid' => $rfid,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RFID $rfid)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $rfid->update([
            'name' => $request->name,
            'school' => $request->school,
        ]);
        return redirect()->route('rfid.index')
                        ->with('info', 'Data has been updated');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RFID $rfid)
    {
        $rfid->delete();
        return redirect()->route('rfid.index')
                         ->withDanger('delete', 'Data has been deleted');
    }
}
