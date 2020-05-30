<?php


namespace App;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{


    protected $primaryKey = 'id';
    protected $increment = true;
    protected $table = 'candidates';
    public $timestamps = false;
    protected $casts = [
        'full_name' => 'integer',
        'skill_domain' => 'string',
        'resume' => 'string',
        'interview_video' => 'string',
        'interviewer_comments' => 'string',
        'profile_title' => 'string',
        'available' => 'string',
        'phone_number' => 'string',
        'email' => 'string',
        'citizenship' => 'string',
        'work_visa' => 'string',
        'willing_to_relocate' => 'string',
        'current_project' => 'string',
        'client_comments' => 'string',
        'notice_period' => 'string',
        'photo' => 'string',
        'keywords' => 'string',
        'video_transcript' => 'string',
        'remarks' => 'string',
        'profile_active' => 'string',

    ];

    protected $dates = [
        'date_of_birth'
    ];

    public function getSkillsList()
    {
        return DB::table('skills')->get();
    }


}
