<?php

namespace transcounty;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = ['first_name', 'middle_name', 'last_name', 'email', 'mobile', 'adm_date', 'course', 'gender', 'student_reg', 'dob', 'profile_pix'];

    public function schools(){
      return $this->belongsTo('transcounty\Schools', 'schools_students', 'school_id', 'student_id')->withTimestamps();
    }
}
