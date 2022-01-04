<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\School;

class MemberController extends Controller
{
    public function index()
    {
        return Member::paginate(10);
    }

    public function store(Request $request)
    {
        $member = Member::create($request->all());
    }

    public function show(Member $member)
    {
        return $member;
    }

    public function home()
    {
        return view('member', ['schools' => School::all()]);
    }
}
