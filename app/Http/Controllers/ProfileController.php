<?php

namespace App\Http\Controllers;

use  Illuminate\Http\Request;
use App\Repositories\ProfileRepository;
use lluminate\Database\Eloquent\Model;
use app\Message;
use App\Http\Requests;
use App\Profile;
use App\User;
use DB;
use Gate;
use Validator;

class ProfileController extends Controller
{
    protected $profile;
    public function __construct(ProfileRepository $profile)
    {
       /* $this->middleware('auth',['except'=>[
            'showimagedetails']]);*/
        $this->middleware('auth');

        $this->middleware('profile',['only'=>[
            'update',
            'store',
            //'showimagedetails'
        ]]);

        $this->profile=$profile;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showimagedetails(Request $request){

        header('Content-type: *');
        header('Access-Control-Allow-Origin: *');
        $fileName='and.jpg';
        $destinationPath='uploads';
        $validator=  Validator::make($request->all(), [
            'photo'=>'image|max:2000',

]);
        if ($validator->fails()) {
            return $validator->messages()->getMessages();
        }
        if($request->hasFile('photo')) {


            if ($request->file('photo')->isValid()) {
               // $request->file('file')->move($destinationPath, $fileName);
                return $request->file('photo')->getClientOriginalName();
            }

       return 'madina';}
        else{
            return 'makkah';
        }
    }
    public function index(Request $request)
    {
        $uss=User::where('id',$request->user()->id)->first();
        return view('main.view_profile', [
            'item'=>Profile::where('user_id',$request->user()->id)->first(),
            'userdat'=>$uss,
            'message'=>Message::class,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main/create_profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $destinationPath='uploads';
        $fileName=$request->user()->name.$request->user()->id.'.jpg';

    //return $request->input('first_name').$request->age;
    /*$pro=Profile::where('user_id',67)->first();
      //  $pro=new Profile;
     //         $age= $request->user()->profiles()->value('age');
         $pro->age=$request->age;
        $pro->user_id=6;
         $pro->save();
        return $pro;*/

           // echo $request->user()->name.$request->user()->id.$request->input('first_name');
             //echo json_encode($request->all());
        //  echo $error;
       // if($request->file('photo')->isValid()) {

        $day1 = strtotime($request->age);
        $day1sql = date('Y-m-d', $day1);
           $request->user()->profiles()->create([
                'headline' => $request->headline,
                'aboutme' => $request->aboutme,
                'marital_status' => $request->marital_status,
                'education_level' => $request->education_level,
                'subject_studied' => $request->subject_studied,
                'profession' => $request->profession,
                'jobtitle' => $request->jobtitle,
                'first_language' => $request->first_language,
                'gender'=>$request->gender,
                'income' => $request->income,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'age' => $day1sql,
                'country' => $request->country,
                'phone_no' => $request->phone_no,
                'matri_time' => $request->matri_time,
                'province' => $request->province,
                'matri_time' => $request->matri_time,
                'province' => $request->province,
                'city' => $request->city,
                'photo'=>$fileName,
            ]);
        if($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $request->file('photo')->move($destinationPath, $fileName);
            }
        }
    return 'success';
        //$day1 = strtotime($request->age);
        //$day1sql = date('Y-m-d', $day1);
        //return $day1sql;
    }


    public function show(Request $request, $id)
    {
        $usas = Profile::find($id);
        $uss=User::where('id',$usas->user_id)->first();
//echo json_encode($uss);
       // echo 'madina';
        return view('main.view_profile', [
            'item'=>$usas,
            'userdat'=>$uss,
            'message'=>Message::class,

        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::findOrFail($id);

        if (Gate::denies('update-profile', $profile)) {
            abort(403);
        }

        return view('main/edit_profile',['data'=>$id]);

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profile = Profile::findOrFail($id);

        if (Gate::denies('update-profile', $profile)) {
            abort(403);
        }
        $destinationPath='uploads';
        $fileName=$request->user()->name.$request->user()->id.'.jpg';

       // echo $request->user()->name.$request->user()->id;
//if($request->file('photo')->isValid()) {
    DB::table('profiles')
        ->where('id', $id)
        ->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'age'=>$request->age,
            'phone_no'=>$request->phone_no,
            'country'=>$request->country,
            'province'=>$request->province,
            'city'=>$request->city,
            'matri_time'=>$request->matri_time,
            'headline' => $request->headline,
            'gender'=>$request->gender,
            'aboutme' => $request->aboutme,
            'marital_status' => $request->marital_status,
            'education_level' => $request->education_level,
            'subject_studied' => $request->subject_studied,
            'profession' => $request->profession,
            'jobtitle' => $request->jobtitle,
            'first_language' => $request->first_language,
            'income' => $request->income,
            'photo'=>$fileName,

        ]);
        if($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $request->file('photo')->move($destinationPath, $fileName);

            }

        }
    return        redirect('profile/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo 'makkah jana he';
        //
    }
    public function allprofile(Request $request){

       header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');
        $id=$request->id;

     //   return response()->json($request->input('id'));

       if($id==1){
           $ae=DB::table('blockusers')->where('block_user_id',$request->user()->id)->pluck('user_id');

            return response()->json(DB::table('profiles')->select('profiles.*')->wherenotin('profiles.user_id',$ae)->get());
          // return response()->json($request->method());
        }
       elseif($id==2){
           return response()->json(Profile::where('country','USA')->get());

       } elseif($id==3){
           return response()->json(Profile::where('country','UK')->get());

       }
        elseif($id=='singles'){
            return response()->json(Profile::where('marital_status','single')->get());

        }
       elseif($id=='arabic'){
           return response()->json(Profile::where('first_language','arabic')->get());

       } elseif($id=='english'){
           return response()->json(Profile::where('first_language','english')->get());

       } elseif($id=='urdu'){
           return response()->json(Profile::where('first_language','urdu')->get());

       }
    }
    public function allmatches(Request $request){
      // return response()->json(Profile::all()->leftjoin('Blockuser',));
        $ae=DB::table('blockusers')->where('block_user_id',$request->user()->id)->pluck('user_id');


      //  return
        foreach($ae as $item){
            echo $item.'<br>';
        }


      /*  echo json_encode($ae);
print_r($ae);*/
      //  echo $ae[0].['user_id'];
        return response()->json(DB::table('profiles')->select('profiles.user_id')->wherenotin('profiles.user_id',$ae)->get());

    }




}
