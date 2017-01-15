<?php

namespace transcounty;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['school_id', 'title', 'content'];

    public function school(){
      return $this->belongsTo('transcountty\Schools', 'school_id');

    }
}
