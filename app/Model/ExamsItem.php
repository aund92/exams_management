<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class ExamsItem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'exams_item';

    protected $fillable = ['exam_id', 'question_id', 'question_name'];
}
