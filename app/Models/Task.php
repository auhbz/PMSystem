<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //ID, Name, Description
    //type (standard or summary)
    //Resource/Assignee
    //Expected start date, expected end date, expected duration, expected effort
    //Actual start date, actual end date, actual duration
    //Effort completed, Percent completed, predecessor tasks, successor tasks
    //List of issues
    
    /*
    protected $table = 'tasks';

    protected $guarded = ['id'];

    public function issues()
    {
        return $this->hasMany(Issue::class, 'task_id');
    }
     */
}
