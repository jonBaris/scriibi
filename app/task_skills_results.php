<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/*
this associates a particular task with its corresponding skill and result.
rows in this table are then associated with particular students in "tasks_students"
*/


class task_skills_results extends Model
{
    protected $primaryKey = 'result_Id';

    public function tasks_students(){
        return $this->hasOne('App\tasks_students', 'result_Id', 'result_Id');
    }
}
