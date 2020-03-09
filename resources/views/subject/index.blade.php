@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>{{__('Danh mục Môn Học')}}</h2>
        <div class="row float-right" style="padding: 10px">
            <a href="{{route('create-subject')}}" class="btn btn-secondary" >Thêm Môn học</a>
        </div>
        <table class="table table-bordered table-hover" >
            <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Tên Môn Học</th>
            </tr>
            </thead>
            <tbody>
            @foreach($subjects as $subject)
                <tr>
                    <td>{{ $subject->id }}</td>
                    <td>{{ $subject->subject_name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $subjects->links() !!}
    </div>
@endsection
