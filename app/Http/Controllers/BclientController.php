<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Bclient;
use App\User;
use DB;
use Gate;
use Validator;
use App\Repositories\BclientRepository;

class BclientController extends Controller
{
    protected $bclients;

    public function __construct(BclientRepository $bclients)
    {
        $this->middleware('auth');
$this->middleware('bclient',['only'=>[
'update',
'store',
    //'showimagedetails'
]]);

    $this->bclients=$bclients;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // echo json_encode($request->all());
       // return;

        $destinationPath='uploads';
        $fileName=$request->user()->name.$request->user()->id.'bcl.jpg';
        //$day1 = strtotime($request->age);
        //$day1sql = date('Y-m-d', $day1);
        $request->user()->bclients()->create([
            'client_name'=>$request->client_name,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'phone'=>$request->phone,
            'description'=>$request->description,
            'education'=>$request->education,
            'profession'=>$request->profession,
            'req_age'=>$request->req_age,
            'req_description'=>$request->req_description,
            'req_profession'=>$request->req_profession,
            'req_education'=>$request->req_education,
            'photo'=>$fileName,
        ]);
        if($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $request->file('photo')->move($destinationPath, $fileName);
            }
        }
      return  redirect( url('/bureaupanel'));

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $client=Bclient::where('id',$id)->get();
      //  echo json_encode($client);
        return view('main.bureaupanel',[
            'loc'=>'cli',
            'client'=>$client
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
