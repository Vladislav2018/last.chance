<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_Сont extends Model
{
    public function Cont()
    {
        return $this->belongsTo('App\Models\Employee', 'employee_id', 'id');    
    }
}
