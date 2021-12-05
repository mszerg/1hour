@extends('front.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        Добавление договора маркетинга
                        <form action="{{ route('front.marketingdogovor.store') }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>

                                </div>
                            @endif
                            <div class="form-group w-25">
                                <label>Номер Договора</label>
                                <input type="text" class="form-control" name="NumDogovor" placeholder="Номер Договора"
                                       value="{{ old('NumDogovor') }}">
                                <div class="form-group">
                                    <label>Наименование контрагента</label>
                                    <select class="form-control select2bs4 select2-hidden-accessible"
                                            style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true"
                                            name="Name_post">
                                        @foreach($posts as $post)
                                            <option
                                                value="{{ $post->PostNo }}" {{ $post->PostNo==old('Name_post') ? ' selected' : '' }}>
                                                {{ $post->Name }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>

                                <label>Дата начала договора</label>
                                <input type="text" class="form-control" name="DB_dogovor"
                                       placeholder="Дата начала договора" value="{{ old('DB_dogovor')}}">
                                <label>Дата окончания договора</label>
                                <input type="text" class="form-control" name="DE_dogovor"
                                       placeholder="Дата окончания договора" value="{{ old('DE_dogovor')}}">
                            </div>
                            <div>
                                <div class="form-group">
                                <textarea id="summernote" name="Dogovor_text">
                                    {{ old('Dogovor_text')}}
                                </textarea>
                                </div>
                                <br class="form-group">
                                <label>Автопролонгация</label>
                                <input type="checkbox" name="AutoRenewal" value="1"> <br>
                                <label>Договор закрыт</label>
                                <input type="checkbox" name="Active" value="1"> <br>
                                <div class="form-group w-50">
                                    <label for="exampleInputFile">Сканкопия договора</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="Scancopy">
                                            <label class="custom-file-label">Выберите сканкопию</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Загрузка</span>
                                        </div>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary" value="Добавить">


                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
