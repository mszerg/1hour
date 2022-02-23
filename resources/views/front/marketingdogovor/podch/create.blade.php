@extends('front.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Условия по договору маркетинга</h1>
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
                                <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true" name="marketing_types_id" id="marketing_types_id">
                                    @foreach($marketingtypes as $marketingtype)
                                        <option value="{{ $marketingtype->id }}" {{ $marketingtype->id==old('marketing_types_id') ? ' selected' : '' }}>
                                            {{ $marketingtype->TypeMarketing }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <label>Цена</label>
                            <input type="number" step="any" class="form-control" name="price" placeholder="Цена" value="{{ old('price')}}">
                            <label>Менеджер</label>
                            <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true" name="managers_id" id="managers_id">
                                @foreach($managers as $manager)
                                    <option value="{{ $manager->id }}" {{ $manager->id==old('managers_id') ? ' selected' : '' }}>
                                        {{ $manager->name }}
                                    </option>
                                @endforeach
                            </select>
                            <label>Комментарий</label>
                            <input type="text" class="form-control" name="Comment" placeholder="Комментарий" value="{{ old('Comment')}}">
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
