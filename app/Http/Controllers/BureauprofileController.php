<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use Gate;
use DB;
use App\Bclient;
use App\Bureauprofile;

class BureauprofileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('bureauprofile',['only'=>[
            'update',
            'store',
            //'showimagedetails'
        ]]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client=Auth::user()->bclients;

        return view('main/bureaupanel',[
            'clients'=>$client
        ]);
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
        return view('main/create_bureauprofile');

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
        $fileName=$request->user()->name.$request->user()->id.'br.jpg';
        $request->user()->bureauprofiles()->create([
            'name' => $request->name,
            'phone' => $request->phone,
             'photo' => $fileName,
            'address'=>$request->address,
            'description'=>$request->description,

        ]);
        if($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $request->file('photo')->move($destinationPath, $fileName);
            }
        }
        return view('main/index');


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
        $clients=Auth::user()->bclients;
        $client=Bclient::where('id',$id)->get();
        //  echo json_encode($client);
        return view('main.bureaupanel',[
            'loc'=>'cli',
            'client'=>$client,
            'clients'=>$clients
        ]);//
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
        $profile = Bureauprofile::findOrFail($id);

        if (Gate::denies('update-profile', $profile)) {
            abort(403);
        }
        $destinationPath='uploads';
        $fileName=$request->user()->name.$request->user()->id.'br.jpg';

        // echo $request->user()->name.$request->user()->id;
//if($request->file('photo')->isValid()) {
        DB::table('bureauprofiles')
            ->where('id', $id)
            ->update([
                'name'=>$request->name,
                'address'=>$request->address,
                'phone'=>$request->phone,
                'description'=>$request->description,
                'photo'=>$fileName

            ]);
        if($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $request->file('photo')->move($destinationPath, $fileName);

            }

        }
        return        redirect('bureaupanel/');

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
