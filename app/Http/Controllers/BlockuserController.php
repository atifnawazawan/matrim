<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\Blockuser;
use App\Http\Requests;
use Gate;
class BlockuserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function blockuser(Request $request){
        header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');

//echo $request->input('userid');
//        return response()->json($request->input('userid'));
        $this->validate($request, [
            //'messagebody' => 'required|max:255',
            'userid'=>'required',
        ]);
        if (Gate::denies('block_user', $request)) {

            return 'can not block to your self';
        }
        $request->user()->blockusers()->create([
            // 'to' => $request->to,
            //'messagebody' => $request->messagebody,
            'block_user_id'=>$request->userid,
            //'is_read'=>1,
        ]);
        echo 'blocked successfully';
    }
    public function unblockuser(Request $request){
    header('Content-type: application/json');
    header('Access-Control-Allow-Origin: *');

//echo $request->input('userid');
//        return response()->json($request->input('userid'));
    $this->validate($request, [
        //'messagebody' => 'required|max:255',
        'userid'=>'required',
    ]);
    /*if (Gate::denies('unblock_user', $request)) {

        return 'can not block to your self';
    }*/
       $buser=Blockuser::where('user_id',$request->user()->id)->where('block_user_id',$request->input('userid'))->first();
$buser->delete();
    echo 'unblocked successfully';
}
    public function checkblockuser(Request $request)
    {
        header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');

        echo Blockuser::where('user_id',$request->user()->id)->where('block_user_id',$request->input('userid'))->value('block_user_id');
    }
        //
}
