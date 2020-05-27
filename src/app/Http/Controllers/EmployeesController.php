<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function renderRegisterPageCandidate()
    {
        return view('registerCandidate');
    }
}
