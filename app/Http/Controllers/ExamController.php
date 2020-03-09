<?php

namespace App\Http\Controllers;

use App\Http\Consts\PagingConsts;
use App\Model\Exams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $exams = Exams::select([
            'exams.id',
            'exams.exam_name',
            'exams.exam_time',
            'exams.total_question',
            'subject.subject_name',
        ])
            ->where('exams.user_id', Auth::user()->id)
            ->leftJoin('subject', 'exams.subject_id', 'subject.id')
            ->paginate(PagingConsts::ITEM_PER_PAGE);;
        return view('exams.index', compact('exams'));
    }

    public function create()
    {
        return view('exams.create');
    }
}
