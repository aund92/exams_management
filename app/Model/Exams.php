<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'exams';

    protected $fillable = ['user_id', 'subject_id', 'exam_name', 'exam_time', 'total_question'];
}
