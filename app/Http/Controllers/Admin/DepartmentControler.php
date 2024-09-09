<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentControler extends Controller
{
    public function index() {
        return view('admin.departments.index');
    }
    public function create() {
        return view('admin.departments.create');
    }
    // public function show($id) {
    //     return view('admin.departments.show');
    // }
    // public function edit($id) {
    //     return view('admin.departments.edit');
    // }
}
