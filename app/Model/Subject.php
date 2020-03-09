<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subject';

    protected $fillable = ['user_id', 'subject_name'];
}
