<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeControler extends Controller
{
    public function index() {
        return view('admin.employees.index');
    }
    public function create() {
        return view('admin.employees.create');
    }
    // public function show($id) {
    //     return view('admin.employees.show');
    // }
    // public function edit($id) {
    //     return view('admin.employees.edit');
    // }
}
