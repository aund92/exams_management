@extends('layouts.app')

@section('content')
    <style>

    </style>
    <div class="container" style="height: 800px">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header font-weight-bold" style="font-size: 20px">
                        Tạo Mới Đề Thi
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br/>
                        @endif
                        <form method="post">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <label for="subject_name" class="col-lg-2">{{ __('Tên Đề Thi') }}</label>
                                    <input type="text" class="form-control col-lg-4" name="subject_name"/>
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="name" class="col-lg-2">{{ __('Thời gian làm bài') }}</label>
                                    <input type="text" class="form-control col-lg-4" name="subject_name"/>
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="name" class="col-lg-2">{{ __('Tên Môn Học') }}</label>
                                    <select class="form-control col-lg-4">
                                        <option value="1">Đáp Án A</option>
                                        <option value="2">Đáp Án B</option>
                                        <option value="3">Đáp Án C</option>
                                        <option value="4">Đáp Án D</option>
                                    </select>
                                </div>
                            </div>
                            <div class="container overflow-auto border border-dark rounded" style="max-height: 600px;overflow-x: auto; background-color: ">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <!-- Default checked -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check1" checked>
                                            <label class="custom-control-label" for="check1">Câu hỏi 1</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <!-- Default checked -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check2" checked>
                                            <label class="custom-control-label" for="check2">Câu hỏi 2</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <!-- Default checked -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check2" checked>
                                            <label class="custom-control-label" for="check2">Câu hỏi 3</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <!-- Default checked -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check2" checked>
                                            <label class="custom-control-label" for="check2">Câu hỏi 4</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <!-- Default checked -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check2" checked>
                                            <label class="custom-control-label" for="check2">Câu hỏi 5</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <!-- Default checked -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check2" checked>
                                            <label class="custom-control-label" for="check2">Câu hỏi 6</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <!-- Default checked -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check2" checked>
                                            <label class="custom-control-label" for="check2">Câu hỏi 7</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <!-- Default checked -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check2" checked>
                                            <label class="custom-control-label" for="check2">Câu hỏi 8</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <!-- Default checked -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check2" checked>
                                            <label class="custom-control-label" for="check2">Câu hỏi 9</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <!-- Default checked -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check2" checked>
                                            <label class="custom-control-label" for="check2">Câu hỏi 10</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <!-- Default checked -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check2" checked>
                                            <label class="custom-control-label" for="check2">Câu hỏi 11</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <!-- Default checked -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check2" checked>
                                            <label class="custom-control-label" for="check2">Câu hỏi 2</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <!-- Default checked -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check2" checked>
                                            <label class="custom-control-label" for="check2">Câu hỏi 2</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <!-- Default checked -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check2" checked>
                                            <label class="custom-control-label" for="check2">Câu hỏi 2</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <!-- Default checked -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check2" checked>
                                            <label class="custom-control-label" for="check2">Câu hỏi 2</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <!-- Default checked -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input bg-secondary" id="check2" checked>
                                            <label class="custom-control-label" for="check2">Câu hỏi 2</label>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <button type="submit" class="btn btn-secondary" style="margin-top: 10px">Thêm Môn Học</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
