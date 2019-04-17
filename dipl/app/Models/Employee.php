<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function employeeUserId()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    public function Org()
    {
        return $this->hasOne('App\Models\Employee_Org', 'employee_id', 'id');    
    }
    public function Cont()
    {
        return $this->hasMany('App\Models\Employee_Cont', 'employee_id', 'id');    
    }
    public function Result()
    {
        return $this->hasOne('App\Models\Pers_result', 'employee_id', 'id');    
    }
    public function TasksEmployee()
    {
        return $this->hasMany('App\Models\Task', 'manager_id', 'head_id');    
    }
    public function Groups()
    {
        return $this->hasMany('App\Models\Group', 'head_id', 'head_id');    
    }
    
}
