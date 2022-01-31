<?php

namespace App\Models;

use App\Models\User;
use App\Models\Teacher;
use App\Models\StudentClass;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
            'teachers_id'       ,
            'student_classes_id',
            'stream'            ,
            'subjects_id'       ,
            'topic'             ,
            'scheme'            ,
            'course_outline'    ,
            'knowledge'         ,
            'relevant'          ,
            'dressing'          ,
            'assignments'       ,
            'notes'             ,
            'class_control'     ,
            'evaluation'        ,
            'feedback'          ,
            'praised'           ,
            'poor_bahaviour'    ,
            'learner_engagement',
            'time_utilisation'  ,
            'caie_demands'      ,
            'comment' 
    ];

    /**
     * Get the user that owns the Lesson
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    /**
     * Get the teacher that owns the Lesson
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teachers_id', 'id');
    }

    /**
     * Get the studentClass that owns the Lesson
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function studentClass()
    {
        return $this->belongsTo(StudentClass::class, 'student_classes_id', 'id');
    }
}
