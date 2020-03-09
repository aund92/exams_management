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
                        Tạo Mới Câu Hỏi
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
                            @csrf
                            <div class="form-group">
                                <label for="name">{{ __('Nội Dung Câu Hỏi') }}</label>
                                <input type="text" class="form-control" name="subject_name"/>
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('Tên Môn Học Câu Hỏi') }}</label>
                                <input type="text" class="form-control" name="subject_name"/>
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('Đáp Án A') }}</label>
                                <input type="text" class="form-control" name="subject_name"/>
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('Đáp Án B') }}</label>
                                <input type="text" class="form-control" name="subject_name"/>
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('Đáp Án C') }}</label>
                                <input type="text" class="form-control" name="subject_name"/>
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('Đáp Án D') }}</label>
                                <input type="text" class="form-control" name="subject_name"/>
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('Đáp Án Đúng') }}</label>
                                <select class="form-control">
                                    <option value="1">Đáp Án A</option>
                                    <option value="2">Đáp Án B</option>
                                    <option value="3">Đáp Án C</option>
                                    <option value="4">Đáp Án D</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-secondary">Thêm Câu Hỏi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
