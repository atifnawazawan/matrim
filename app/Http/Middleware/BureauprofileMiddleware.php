<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Closure;
use Illuminate\Support\Facades\URL;

class BureauprofileMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $validator=  Validator::make($request->all(), [
            'phone'=>'required|min:5',
            'address'=>'required|min:10',
            'name'=>'required',
            'description'=>'required|min:5',

        ]);
        if ($validator->fails()) {
            /*  foreach ($validator->messages()->getMessages() as $field_name => $messages)
              {
               //  echo var_dump($messages); // messages are retrieved (publicly)
              }*/

            //return $validator->messages()->getMessages();
            return redirect(url()->previous())
                ->withErrors($validator)
                ->withInput();
            // return 'validator stops';
        }


        return $next($request);
    }
}
