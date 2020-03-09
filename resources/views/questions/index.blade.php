@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>{{__('Danh mục Câu Hỏi')}}</h2>
        <div class="row float-right" style="padding: 10px">
            <a href="{{route('create-question')}}" class="btn btn-secondary" >Thêm Câu Hỏi</a>
        </div>
        <table class="table table-bordered table-hover" >
            <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Nội Dung Câu Hỏi</th>
                <th>Tên Môn Học</th>
            </tr>
            </thead>
            <tbody>
            @foreach($questions as $question)
                <tr>
                    <td>{{ $question->id }}</td>
                    <td>{{ $question->question_name }}</td>
                    <td>{{ $question->subject_name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $questions->links() !!}
    </div>
@endsection
