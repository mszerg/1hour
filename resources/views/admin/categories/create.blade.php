@extends('admin.layouts.main')
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
                    Добавление категории
                    <form action="{{ route('admin.category.store') }}" method="POST" class="w-25">
                        @csrf
                        <div class="form-group">
                            <label>Постоянный или переменный маркетинг</label>
                            <select class="form-control" name="PostPeremenType">
                                <option>Постоянный Маркетинг</option>
                                <option>Переменный Маркетинг</option>
                            </select>
                            <label>Тип маркетинга</label>
                            <input type="text" class="form-control" name="TypeMarketing" placeholder="Тип маркетинга">
                            @error('TypeMarketing')
                                <div class="text-danger">Это поле обязательно для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea id="summernote" name="content"></textarea>
                        </div>
                        <div class="form-group">
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
