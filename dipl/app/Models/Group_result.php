<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group_result extends Model
{
    public function groupResult()
    {
        return $this->belongsTo('App\Group', 'group_id', 'id');    
    }
}
