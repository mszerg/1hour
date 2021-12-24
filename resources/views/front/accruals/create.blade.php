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
                    Создать счет / заявку на маркетинг

                    <form action="{{ route('front.accruals.store') }}" method="POST">
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
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Наименование предприятия</th>
                                    <th scope="col">Контрагент</th>
                                    <th scope="col">Дата</th>
                                    <th scope="col">Сумма</th>
                                    <th scope="col">Назначение платежа</th>
                                    <th scope="col">ЦФО</th>
                                    <th scope="col">БДР_3</th>
                                    <th scope="col">Добавить</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td><input type="text" name="NAME_F" placeholder="Наименование предприятия" class="form-control"></td>
                                    <td><input type="text" name="NAME_KORR" placeholder="Контрагент" class="form-control"></td>
                                    <td><input type="date" name="DATA_DOC" placeholder="Дата" class="form-control"></td>
                                    <td><input type="number" name="SUM_IN" placeholder="Сумма" class="form-control"></td>
                                    <td><input type="text" name="N_P" placeholder="Назначение платежа" class="form-control"></td>
                                    <td><input type="text" name="CFO" placeholder="ЦФО" class="form-control"></td>
                                    <td><input type="text" name="D_R" placeholder="БДР" class="form-control"></td>
                                    <td><input type="submit" class="btn btn-success" value="Добавить"></td>
                                </tr>
                                </tbody>
                            </table>

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
