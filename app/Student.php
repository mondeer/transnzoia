<?php

namespace transcounty;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $fillable = ['schools_id', 'first_name', 'middle_name', 'last_name', 'email', 'mobile', 'adm_date', 'course', 'gender', 'student_reg', 'dob', 'profile_pix'];

    public function schools(){
      return $this->belongsTo('transcountty\Schools');

    }
}
