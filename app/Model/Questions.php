<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questions';

    protected $fillable = ['user_id', 'subject_id', 'question_name', 'answer_a', 'answer_b', 'answer_c', 'answer_d', 'correct_answer'];
}
