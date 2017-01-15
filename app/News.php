<?php

namespace transcounty;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    $fillable = ['school_id', 'title', 'content'];

    public function schools(){
      return $this->belongsTo('transcountty\Schools');

    }
}
