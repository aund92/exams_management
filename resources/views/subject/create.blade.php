@extends('layouts.app')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Tạo Mới Môn Học
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                        @endif
                        <form method="post" >
                            <div class="form-group">
                                @csrf
                                <label for="name">{{ __('Tên Môn Học') }}</label>
                                <input type="text" class="form-control" name="subject_name"/>
                            </div>
                            <button type="submit" class="btn btn-secondary">Thêm Môn Học</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
