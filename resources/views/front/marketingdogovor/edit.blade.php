@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование договора маркетинга</h1>
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
                    <form action="{{ route('front.marketingdogovor.update',$marketingdogovor->id) }}" method="POST" enctype="multipart/form-data" class="w-25">
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
                        @method('PATCH')
                        <div class="form-group">
                            <label>Номер Договора</label>
                            <input type="text" class="form-control" name="NumDogovor" placeholder="Номер Договора" value="{{ $marketingdogovor->NumDogovor }}">
                            <label>Окпо контрагента</label>
                            <input type="text" class="form-control" name="OKPO_post" placeholder="Окпо контрагента" value="{{ $marketingdogovor->OKPO_post }}">
                            <label>Наименование контрагента</label>
                            <input type="text" class="form-control" name="Name_post" placeholder="Наименование контрагента" value="{{ $marketingdogovor->Name_post }}">
                            <label>Дата начала договора</label>
                            <input type="text" class="form-control" name="DB_dogovor" placeholder="Дата начала договора" value="{{ $marketingdogovor->DB_dogovor }}">
                            <label>Дата окончания договора</label>
                            <input type="text" class="form-control" name="DE_dogovor" placeholder="Дата окончания договора" value="{{ $marketingdogovor->DE_dogovor }}">
                        </div>
                        <div>
                            <div class="form-group">
                                <textarea id="summernote" name="Dogovor_text">
                                    {{ $marketingdogovor->Dogovor_text }}
                                </textarea>
                            </div>
                            <br class="form-group">
                            <label>Договор закрыт</label>
                            <input type="checkbox" name="Active" value="{{ $marketingdogovor->Active }}"> <br>

                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="Scancopy">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-primary" value="Обновить">
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
