<?php

namespace App\Http\Controllers;

use App\Candidates;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        $candidatesUtil = new Candidates();
        return view(
            'index',
            [
                'skills' => $candidatesUtil->getSkillsList(),
            ]
        );
    }

    public function renderRegisterPageCandidate()
    {

        $candidatesUtil = new Candidates();
        return view(
            'registerCandidate',
            [
                'skills' => $candidatesUtil->getSkillsList(),
            ]
        );
    }

    public function storeCandidate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:100',
            'full_number' => 'required|min:10|max:13',
            'email' => 'required|email',
            'end_date' => 'required|date_format:Y-m-d|after:today',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',

        ]);
    }
}
