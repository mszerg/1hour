@extends('front.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Создать счет / заявку на маркетинг</h1>
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
                            <div class="form-group" hidden>
                                <label>Договор маркетинга</label>
                                <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true" name="marketing_dogovors_podches_id">
                                    @foreach($marketing_dogovor_podches as $marketing_dogovor_podch)
                                        <option value="{{ $marketing_dogovor_podch->id }}" {{ $marketing_dogovor_podch->id==$usloviya['usloviya'] ? ' selected' : '' }}>
                                            {{ $marketing_dogovor_podch->Comment }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group"> <!-- Date input -->
                                <label class="control-label" for="date">Дата счета</label>
                                <input class="form-control" id="date" name="DateInvoice" placeholder="Дата счета" type="text"
                                       value="{{ old('DateInvoice') == null ? date('d.m.Y',strtotime('first day of this month', time())-86400) : old('DateInvoice')}}"/>
                            </div>
                            <label>База расчета</label>
                            <input type="number" step="any" onchange="val()" class="form-control" id="CalculationBase_id" name="CalculationBase" placeholder="База расчета" value="{{old('CalculationBase')==null ? 1 : old('CalculationBase')}}">
                            <label>Цена</label>
                            <input type="number" step="any" class="form-control" READONLY id="Price_id" name="Price" placeholder="Цена" value="{{$usloviya['sum']}}">
                            <label>ИТОГО</label>
                            <input type="number" step="0.01" onchange="valitogo()" class="form-control" id="SumItogo_id" name="SumItogo" placeholder="ИТОГО" value="{{old('CalculationBase')==null ? $usloviya['sum'] : $usloviya['sum'] * old('CalculationBase')}}">
                            <div class="form-group">
                                <label>Менеджер</label>
                                <select class="custom-select" name="managers_id" id="managers_id">
                                    @foreach($managers as $manager)
                                        <option value="{{ $manager->id }}" {{ $manager->id==$usloviya['manager'] ? ' selected' : '' }}>
                                            {{ $manager->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <label>Комментарий</label>
                            <input type="text" class="form-control" name="Comment" placeholder="Комментарий" value="{{old('Comment') == null ? $usloviya['comment'] : old('Comment')}}">
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

<script>
    function val() {

        //d1 = document.getElementById("CalculationBase_id").value;
        //d2 = document.getElementById("Price_id").value;
        //console.log(d);
        //alert (d);
        document.getElementById("SumItogo_id").value = document.getElementById("CalculationBase_id").value * document.getElementById("Price_id").value;
    }
    function valitogo() {

        document.getElementById("CalculationBase_id").value  = Math.round(document.getElementById("SumItogo_id").value / document.getElementById("Price_id").value*100)/100;
    }
</script>

@endsection
