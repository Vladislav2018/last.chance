<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_Org extends Model
{
    public function Org()
    {
        return $this->belongsTo('App\Models\Employee', 'employee_id', 'id');    
    }
}
