<?php

namespace App\Http\Middleware;

use Closure;
use Validator;
class BclientMiddleware
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
            'client_name'=>'required|min:3',
            'age'=>'required',
            'description'=>'required|min:5',
            'gender'=>'required',
            'phone'=>'required',
            'profession'=>'required',
            'education'=>'required',
            'req_age'=>'required',
            'req_description'=>'required',
            'req_profession'=>'required',
            'req_education'=>'required',


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
