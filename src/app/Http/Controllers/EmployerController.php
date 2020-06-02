<?php

namespace App\Http\Controllers;

use App\Candidates;
use Illuminate\Http\Request;

class EmployerController extends Controller
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

    public function renderRegisterPageEmp()
    {

        $candidatesUtil = new Candidates();
        return view(
            'registerEmp',
            [
                'skills' => $candidatesUtil->getSkillsList(),
            ]
        );
    }

    public function storeCandidate(Request $request)
    {
        var_dump($request->file('photo'));
        $this->validate($request, [
                'full_name' => 'required|max:100',
                'phone_number' => 'required',
                'email' => 'required|email',
                'work_visas' => 'required',
                'notice_period' => 'required',
                'date_of_birth' => 'date|required'
            ]
        );

        $file = $request->file('photo');
        $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/storage/usersImages/';
        $uploadImageName = $file->getClientOriginalName();
        $file->move($uploadDir, $uploadImageName);

        $file = $request->file('resume');
        $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/storage/resume/';
        $uploadResumeName = $file->getClientOriginalName();
        $file->move($uploadDir, $uploadResumeName);


        \DB::table('candidates')->insert(
            [
                'full_name' => $request->input('full_name'),
                'skill_domain' => $request->input('skills_domain'),
                'photo' => $uploadImageName,
                'resume' => $uploadResumeName,
                'email' => $request->input('email'),
                'citizenship' => $request->input('citizenship'),
                'current_country' => $request->input('current_country'),
                'phone_number' => $request->input('phone_number'),
                'notice_period' => $request->input('notice_period'),
                'work_visa' => $request->input('work_visas'),
                'date_of_birth' => $request->input('date_of_birth'),
                'willing_to_relocate' => $request->input('willing_to_relocate'),
            ]
        );

        $candidatesUtil = new Candidates();
        return view(
            'index',
            [
                'successfullyAdded' => true,
                'skills' => $candidatesUtil->getSkillsList(),
            ]
        );

    }
}
