@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Договора Маркетинга</h1>
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
                    <div class="col-1 mb-3">
                        <a href="{{ route('front.marketingdogovor.create') }}" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Номер Договора</th>
                                        <th>ОКПО Контрагента</th>
                                        <th>Дата начала договора</th>
                                        <th>Дата конца договора</th>
                                        <th>Договор закрыт</th>
                                        <th>Текст Договора</th>
                                        <th colspan="2" class="text-center">Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($marketingdogovors as $marketingdogovor)
                                        <tr>
                                            <td>{{ $marketingdogovor->id }}</td>
                                            <td>{{ $marketingdogovor->NumDogovor }}</td>
                                            <td>{{ $marketingdogovor->OKPO_post }}</td>
                                            <td>{{ $marketingdogovor->DB_dogovor }}</td>
                                            <td>{{ $marketingdogovor->DE_dogovor }}</td>
                                            <td>{{ $marketingdogovor->Active }}</td>
                                            <td>{{ $marketingdogovor->Dogovor_text }}</td>
                                            <td><a href="{{ route('front.marketingdogovor.edit',$marketingdogovor->id) }}"><i
                                                        class="fas fa-pencil-alt"></i></a></td>
                                            <td>
                                                <form action="{{ route('front.marketingdogovor.delete',$marketingdogovor->id) }}"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="fas fa-trash text-danger" role="button"></i>
                                                    </button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
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
