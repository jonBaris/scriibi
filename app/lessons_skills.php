<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
a lesson is target for at least one scriibi skill. this class records that association.
*/

class lessons_skills extends Model
{
    protected $primaryKey = 'lessons_skills_Id';

}
