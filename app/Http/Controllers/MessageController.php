<?php

namespace App\Http\Controllers;
use DB;
use App\Message;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\MessageRepository;
use Illuminate\Http\Response;
use App\User;
use Gate;

class MessageController extends Controller
{
    protected $messages;
    //
    public function __construct(MessageRepository $messages)
    {
        $this->middleware('auth');

        $this->messages = $messages;

    }
    public function index(Request $request)
    {



        return view('main.message', [
            'messages' => $this->messages->forUser($request->user()),
        ]);

    }
    public function premessage(Request $request){
//echo json_encode($request->user());
       // echo Message:: orderBy('created_at', 'asc')->where('to',$request->user()->id)
        //    ->get().'<br>';



          return response()->view('main.inbox', [
              'inboxmessages' => json_encode($this->messages->fromUser($request->user())),
              'inboxlinks' => $this->messages->fromUser($request->user()),
              'sentmessages' => $this->messages->forUser($request->user()),
          ]);

    }
    public function sent(Request $request){

        return view('main.sent', [
            'messages' => $this->messages->forUser($request->user()),
        ]);

    }

    public function store(Request $request)
    {

        header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');


//return response()->json($request->input('messagebody'));
         $this->validate($request, [
            'messagebody' => 'required|max:255',
        ]);
        if (Gate::denies('send_message', $request)) {

           return 'can not send to your self';
        }
      $request->user()->messages()->create([
            'to' => $request->to,
            'messagebody' => $request->messagebody,
            'is_read'=>1,
        ]);
echo 'message sent successfully';
        //return redirect('/premessage');



    }
}
