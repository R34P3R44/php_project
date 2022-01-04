<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Member;


class SchoolController extends Controller
{
    
    public function index()
    {
        return School::paginate(10);
    }

    public function members(int $school)
    {
        return School::with('members')->find($school);
    }

}
