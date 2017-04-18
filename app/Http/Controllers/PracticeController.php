<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePracticeRequest;
use App\Http\Requests\EditPracticeRequest;
use App\personal_practice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PracticeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $practice = personal_practice::where('skater_id',Auth::user()->id)
            ->orderBy('start_time','desc')
            ->get();
        return ($practice);
        //return view('practiceHome',['practice'=>$practice]);

    }

    public function createForm()
    {
        return view('createPractice');
    }
    public function create(CreatePracticeRequest $request)
    {

    }

    public function edit(EditPracticeRequest $request)
    {

    }
}
