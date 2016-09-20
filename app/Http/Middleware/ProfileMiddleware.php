<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Closure;
use Illuminate\Support\Facades\URL;

class ProfileMiddleware
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
          'photo'=>'image|max:2000',
         'first_name'=>'required',
        'last_name'=>'required',
          'headline' => 'required|max:255',
          'aboutme'=>'required|min:7',

            'marital_status'=>'required',
            'education_level'=>'required',
            'subject_studied'=>'required',
            'profession'=>'required',
            'jobtitle'=>'required',
            'first_language'=>'required',
          'income'=>'required',

          'matri_time'=>'required',
          'province'=>'required',
          'city'=>'required',
          'age'=>'required',
          'country'=>'required',
          'phone_no'=>'required',
          'gender'=>'required',
        /*  'pro_create_by'=>'required',
          'hide_pro'=>'required',
         */

          //   'citizenship'=>'required',

          //   'country_of_origin'=>'required',

          /*  'street'=>'required',
            'postal_code'=>'required',
            'born_country'=>'required',
            'residence_type'=>'required',
            'can_relocate'=>'required',
            'phone_protection'=>'required',*/

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
