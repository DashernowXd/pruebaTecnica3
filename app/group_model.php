<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group_model extends Model
{
    protected $table= 'groups';

    protected $primaryKey = 'matricula';

    public $timesstamps =false;

    protected $fillable = ['matricula', 'name', 'teacherId', 'numStudents', 'swift', 'grade'];

}

