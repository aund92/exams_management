<?php

namespace App\Http\Controllers;

use App\Http\Consts\PagingConsts;
use App\Model\Questions;
use App\Model\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $questions = Questions::select([
            'questions.id',
            'questions.question_name',
            'subject.subject_name',
        ])
            ->where('questions.user_id', Auth::user()->id)
            ->leftJoin('subject', 'questions.subject_id', 'subject.id')
            ->paginate(PagingConsts::ITEM_PER_PAGE);;
        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        return view('questions.create');
    }
}
