<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function TasksEmployee()
    {
        return $this->belongsTo('App\Employee', 'manager_id', 'head_id');    
    }
}
