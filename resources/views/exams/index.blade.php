@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>{{__('Danh mục Đề Thi')}}</h2>
        <div class="row float-right" style="margin-bottom: 10px">
            <a href="{{route('create-exams')}}" class="btn btn-secondary" >Thêm Đề Thi</a>
        </div>
        <table class="table table-bordered table-hover" >
            <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Tên Đề Thi</th>
                <th>Số lượng câu hỏi</th>
                <th>Thời gian làm bài</th>
                <th>Môn học</th>
            </tr>
            </thead>
            <tbody>
            @foreach($exams as $exam)
                <tr>
                    <td>{{ $exam->id }}</td>
                    <td>{{ $exam->exam_name }}</td>
                    <td>{{ $exam->total_question }}</td>
                    <td>{{ $exam->exam_time }}</td>
                    <td>{{ $exam->subject_name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $exams->links() !!}
    </div>
@endsection
