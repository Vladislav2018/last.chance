@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm</title>
</head>
    <body>
        <nav class="nav justify-content-center">
        </nav>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">Добавить сотрудника</div>

                    <div class="card-body">
                    <form method="POST" action="{{ route('addworker') }}">
                            {{-- ввод имени--}}
                            @csrf
                            <div class="form-group row">
                                <label for="first_name" class="col-md-4 col-form-label text-md-right">{{--{{/**/}}--}}Имя</label>

                                <div class="col-md-5">
                                    <input id="first_name" pattern="[A-Za-zА-Яа-яЁё]{2,255}" type="text"  class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                    {{--@if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{--{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif--}}
                                
                            {{-- ввод фамилии--}}
                            <div class="form-group row">
                                <label for="last_name" class="col-md-4 col-form-label text-md-right">{{--{{/**/}}--}}Фамилия</label>

                                <div class="col-md-5">
                                    <input id="last_name" pattern="[A-Za-zА-Яа-яЁё]{2,255}" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                    {{--@if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{--{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif--}}
                                </div>
                            </div>
                            {{-- ввод отчества--}}
                            <div class="form-group row">
                                <label for="patronymic" class="col-md-4 col-form-label text-md-right">{{--{{/**/}}--}}Отчество</label>

                                <div class="col-md-5">
                                    <input id="patronymic" pattern="[A-Za-zА-Яа-яЁё]{2,255}" type="text" class="form-control" name="patronymic" value="{{ old('patronymic') }}" required autofocus>

                                    {{--@if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{--{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif--}}
                                </div>
                            </div>
                        </div>
                        <label for="head_id" class="col-md-4 col-form-label text-md-right">{{--{{/**/}}--}}Идентификатор руководителя</label>

                        <div class="col-md-5">
                            <input id="head_id" type="number" min='2' max= '9223372036854775807'class="form-control" name="head_id" value="{{ old('head_id') }}" required autofocus>

                            {{--@if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{--{{ $errors->first('name') }}</strong>
                                </span>
                            @endif--}}
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Оправить
                    </button>
                    </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
    {{-- <script src="validator.js"></script> скрипт не пашет--}}
    </body>
@endsection