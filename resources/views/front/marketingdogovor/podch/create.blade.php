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



                    Добавление условий договора маркетинга

                    <form action="{{ route('front.marketingdogovor.podch.store',$marketingdogovor->id) }}" method="POST">
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
                                <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true" name="marketing_types_id">
                                    @foreach($marketingtypes as $marketingtype)
                                        <option value="{{ $marketingtype->id }}" {{ $marketingtype->id==old('marketing_types_id') ? ' selected' : '' }}>
                                            {{ $marketingtype->TypeMarketing }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <label>Процент</label>
                            <input type="text" class="form-control" name="Percent" placeholder="Процент" value="{{ old('Percent')}}">
                            <label>Фиксированная сумма</label>
                            <input type="text" class="form-control" name="SumMarketing" placeholder="Фиксированная сумма" value="{{ old('SumMarketing')}}">
                            <label>Бренд</label>
                            <input type="text" class="form-control" name="Brand" placeholder="Бренд" value="{{ old('Brand')}}">
                            <label>Менеджер</label>
                            <input type="text" class="form-control" name="FioManager" placeholder="Менеджер" value="{{ old('FioManager')}}">
                            <label>ID договорa маркетинга</label>
                            <input type="hidden" class="form-control" name="marketing_dogovors_id" value={{ $marketingdogovor->id }}>

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
