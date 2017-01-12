<?php

namespace transcounty;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = ['first_name', 'middle_name', 'last_name', 'email', 'mobile', 'adm_date', 'course', 'gender', 'student_reg', 'dob', 'profile_pix'];
}
