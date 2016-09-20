<?php

namespace App\Http\Controllers;

use App\Repositories\ProfileRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    protected $profile;
    public function __construct(ProfileRepository $profile)
    {
        $this->middleware('auth');
        $this->profile=$profile;
    }
    public function index(Request $request){

        return view('main.view_profile', [
            'data'=>$this->profile->forUser($request->user()),
            'userdat'=>$request->user(),
        ]);
    }
    public function store(Request $request){
       // return $request->all();
        $this->validate($request, [
            'headline' => 'required|max:255',
            'aboutme'=>'required|min:3',
            'marital_status'=>'required',
            'education_level'=>'required',
            'subject_studied'=>'required',
            'profession'=>'required',
            'jobtitle'=>'required',
            'first_language'=>'required',
            'citizenship'=>'required',
            'income'=>'required',
        ]);

        $request->user()->profiles()->create([
            'headline' => $request->headline,
            'aboutme' => $request->aboutme,
            'marital_status'=>$request->marital_status,
            'education_level'=>$request->education_level,
            'subject_studied'=>$request->subject_studied,
            'profession'=>$request->profession,
            'jobtitle'=>$request->jobtitle,
            'first_language'=>$request->first_language,
            'second_language'=>$request->second_language,
            'citizenship'=>$request->citizenship,
            'country_of_origin'=>$request->country_of_origin,
            'income'=>$request->income,

        ]);
    }

    public function update(Request $request, $id)
    {
        echo $id.'madina';
        //
    }
    //
}
