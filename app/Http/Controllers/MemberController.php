<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {
        $data = Member::all();
        return view('pages.members', compact('data'));
    }

    public function create () {
        return view('pages.membersCreate');
    }

    public function store (Request $request) {
        $newEntry = new Member;

        $newEntry->name = $request->name;
        $newEntry->age = $request->age;
        $newEntry->gender = $request->gender;

        $newEntry->save();
        return redirect()->back();
    }

    public function destroy (Member $id) {
        $id->delete();
        return redirect()->back();
    }
}
