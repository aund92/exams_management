<?php

namespace App\Http\Controllers;

use App\Http\Consts\PagingConsts;
use App\Model\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $subjects = Subject::where('user_id', Auth::user()->id)->paginate(PagingConsts::ITEM_PER_PAGE);;
        return view('subject.index', compact('subjects'));
    }

    public function create()
    {
        return view('subject.create');
    }
}
