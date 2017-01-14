<?php

namespace transcounty;

use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
  protected $fillable = ['registration', 'name', 'location', 'reg_date'];
  public function students(){
    return $this->BelongsToMany('transcounty\Students', 'schools_students', 'school_id', 'student_id')->withTimestamps();
  }
}
