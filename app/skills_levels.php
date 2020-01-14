<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/*
this associates a scriibi level with a scriibi skill.
*/


class skills_levels extends Model
{
    protected $primaryKey = 'skills_levels_Id';

    public function student_definitions(){
        return $this->belongsTo('App\student_definitions', 'student_definitions_student_definitions_Id', 'student_definitions_Id');
    }

    public function strategies(){
        return $this->belongsTo('App\strategies', 'strategies_strategies_Id', 'strategies_Id');
    }

    public function goal(){
        return $this->hasMany('App\goals', 'skills_levels_skills_levels_Id', 'skills_levels_Id');
    }
}
