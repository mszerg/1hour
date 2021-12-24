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

                    <form action="{{ route('front.invoice.store') }}" method="POST">
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
                            <div class="form-group">
                                <label>Тип маркетинга</label>
                                <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true" name="marketing_dogovors_podches_id">
                                    @foreach($marketing_dogovor_podches as $marketing_dogovor_podch)
                                        <option value="{{ $marketing_dogovor_podch->id }}" {{ $marketing_dogovor_podch->id==old('marketing_dogovors_podches_id') ? ' selected' : '' }}>
                                            {{ $marketing_dogovor_podch->Comment }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <label>Дата</label>
                            <input type="text" class="form-control" name="DateInvoice" placeholder="Дата счета" value="{{ old('DateInvoice')}}">
                            <label>База расчета</label>
                            <input type="text" class="form-control" name="CalculationBase" placeholder="База расчета" value="{{ old('CalculationBase')}}">
                            <label>Цена</label>
                            <input type="text" class="form-control" name="Price" placeholder="Цена" value="{{ old('Price')}}">
                            <label>ИТОГО</label>
                            <input type="text" class="form-control" name="SumItogo" placeholder="ИТОГО" value="{{ old('SumItogo')}}">
                            <label>Комментарий</label>
                            <input type="text" class="form-control" name="Comment" placeholder="Комментарий" value="{{ old('Comment')}}">
                            <label>Менеджер</label>
                            <input type="text" class="form-control" name="managers_id" placeholder="Менеджер" value="{{ old('managers_id')}}">

                            <div>
                                <input type="submit" class="btn btn-primary" value="Добавить">
                            </div>

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
