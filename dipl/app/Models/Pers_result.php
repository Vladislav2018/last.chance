<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pers_result extends Model
{
    public function Result()
    {
        return $this->belongsTo('App\Employee', 'employee_id', 'id');    
    }
}
