<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class WomenController extends Controller
{
    public function index () {
        $dataWomen = Member::where('gender', 'Woman')->get();
        return view('pages.women', compact('dataWomen'));
    }
}
