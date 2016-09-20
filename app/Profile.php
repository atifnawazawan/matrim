<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
   protected  $guarded=['second_language'];
    /*protected $fillable=['headline','aboutme','marital_status','education_level','subject_studied','profession','jobtitle','first_language','second_language','citizenship','country_of_origin','income','first_name' ,
                    'last_name',
                    'age',
                    'country',
                    'phone_no',
                    'pro_create_by',
                    'hide_pro' ,
                    'matri_time',
                    'province',
                    'pro_create_by',
                    'hide_pro' ,
                    'matri_time',
                    'province' ,
                    'city',
                    'street',
                    'postal_code' ,
                    'born_country',
                    'residence_type',
                    'can_relocate',
                    'phone_protection',
                    'photo',

        ];*/
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}

