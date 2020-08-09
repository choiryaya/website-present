<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\RFID;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.template.default');
    }
    public function rfid(){
        return datatables()->of(RFID::query())->toJson();
    }
}
