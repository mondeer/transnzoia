<?php

namespace transcounty;

use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
  protected $fillable = ['registration', 'name', 'location', 'reg_date'];
  public function students(){
    return $this->hasMany('transcounty\Student');
  }
}
