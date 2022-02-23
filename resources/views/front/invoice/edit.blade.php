@extends('front.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование заявки на счет</h1>
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
                    <form action="{{ route('front.invoice.update',$invoice->id) }}" method="POST" enctype="multipart/form-data" class="w-25">
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

                        <input type="text" hidden class="form-control" name="marketing_dogovors_podches_id" placeholder="Условия" value="{{$invoice->marketing_dogovors_podches_id}}">
                        <div class="form-group"> <!-- Date input -->
                            <label class="control-label" for="date">Дата счета</label>
                            <input class="form-control" id="date" name="DateInvoice" placeholder="Дата счета" type="text"
                                   value="{{ date('d.m.Y',strtotime($invoice->DateInvoice)) }}"/>
                        </div>
                        <label>База расчета</label>
                        <input type="number" step="any" onchange="val()"  class="form-control" id="CalculationBase_id" name="CalculationBase" placeholder="База расчета" value="{{$invoice->CalculationBase}}">
                        <label>Цена</label>
                        <input type="number" class="form-control" READONLY id="Price_id" name="Price" placeholder="Цена" value="{{$invoice->Price}}">
                        <label>ИТОГО</label>
                        <input type="number" step="0.01" onchange="valitogo()" class="form-control" id="SumItogo_id" name="SumItogo" placeholder="ИТОГО" value="{{$invoice->SumItogo}}">
                        <label>Комментарий</label>
                        <input type="text" class="form-control" name="Comment" placeholder="Комментарий" value="{{$invoice->Comment}}">
                        <label hidden>Менеджер</label>
                        <input hidden type="text" class="form-control" name="managers_id" placeholder="Менеджер" value="{{$invoice->managers_id}}">

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Обновить">
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>

    <script>
        function val() {
            document.getElementById("SumItogo_id").value = Math.round(document.getElementById("CalculationBase_id").value * document.getElementById("Price_id").value*100)/100;
        }
        function valitogo() {

            document.getElementById("CalculationBase_id").value  = Math.round(document.getElementById("SumItogo_id").value / document.getElementById("Price_id").value*100)/100;
        }
    </script>
@endsection
