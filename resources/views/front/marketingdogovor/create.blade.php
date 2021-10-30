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
                    <form action="{{ route('front.marketingdogovor.store') }}" method="POST">
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
                            <input type="text" class="form-control" name="NumDogovor" placeholder="Номер Договора">
                            <label>Окпо контрагента</label>
                            <input type="text" class="form-control" name="OKPO_post" placeholder="Окпо контрагента">
                            {{-- @error('OKPO_post')
                                <div class="text-danger">Это поле обязательно для заполнения</div>
                            @enderror --}}
                            <label>Наименование контрагента</label>
                            <input type="text" class="form-control" name="Name_post" placeholder="Наименование контрагента">
                            {{-- @error('Name_post')
                            <div class="text-danger">Это поле обязательно для заполнения</div>
                            @enderror --}}
                            <label>Дата начала договора</label>
                            <input type="text" class="form-control" name="DB_dogovor" placeholder="Дата начала договора">
                            <label>Дата окончания договора</label>
                            <input type="text" class="form-control" name="DE_dogovor" placeholder="Дата окончания договора">
                            </div>
                            <div class="form-group">
                                <textarea id="summernote" name="Dogovor_text"></textarea>
                            </div>
                            <br class="form-group">
                            <label>Договор закрыт</label>
                            <input type="checkbox" name="Active"> <br>
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
