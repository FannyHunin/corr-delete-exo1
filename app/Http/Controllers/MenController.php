<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MenController extends Controller
{
    public function index () {
        $dataMen = Member::where('gender', 'Man')->take(2)->get();
        return view('pages.men', compact('dataMen'));
    }
}
