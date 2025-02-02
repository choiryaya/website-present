<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\RFID;
use App\Equipment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.template.dashboard');
    }
    public function rfid(){
        $rfid = RFID::orderBy('name','ASC');
        return datatables()->of($rfid)
                            //nambah ruting ke edit
                            ->addIndexColumn()
                            ->addColumn('action','admin.template.rfid.action')
                            ->toJson();
    }
    public function equipment(){
        $rfid = Equipment::orderBy('rfid','ASC');
        return datatables()->of($rfid)
                            //nambah ruting ke edit
                            ->addIndexColumn()
                            ->toJson();
    }
}
