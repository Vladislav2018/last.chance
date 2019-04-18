<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function Groups()
    {
        return $this->belongsTo('App\Employee', 'head_id', 'head_id');    
    }
    public function groupResult()
    {
        return $this->hasOne('App\Group_result', 'group_id', 'id');    
    }
    
}
