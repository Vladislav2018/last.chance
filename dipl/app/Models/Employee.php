<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = [];
    public function employeeUserId()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function Org()
    {
        return $this->hasOne('App\Employee_Org', 'employee_id', 'id');    
    }
    public function Cont()
    {
        return $this->hasMany('App\Employee_Cont', 'employee_id', 'id');    
    }
    public function Result()
    {
        return $this->hasOne('App\Pers_result', 'employee_id', 'id');    
    }
    public function TasksEmployee()
    {
        return $this->hasMany('App\Task', 'manager_id', 'head_id');    
    }
    public function Groups()
    {
        return $this->hasMany('App\Group', 'head_id', 'head_id');    
    }
    
}
