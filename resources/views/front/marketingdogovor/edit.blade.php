@extends('front.layouts.main')
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
        <form action="{{ route('front.marketingdogovor.update',$marketingdogovor->id) }}" method="POST" enctype="multipart/form-data">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                        <div class="row w-100">
                            <div class="col-3">
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
                                <input type="submit" class="btn btn-primary" value="Обновить">
                                <div class="form-group">
                                    <label>Номер Договора</label>
                                    <input type="text" class="form-control" name="NumDogovor" placeholder="Номер Договора" value="{{ $marketingdogovor->NumDogovor }}">
                                    <label>Наименование контрагента</label>
                                    <select class="form-control select2bs4 select2-hidden-accessible"
                                            style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true"
                                            name="Name_post">
                                        @foreach($posts as $post)
                                            <option value="{{ $post->PostNo }}" {{ $post->PostNo==$marketingdogovor->Name_post ? ' selected' : '' }}>
                                                {{ $post->Name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label>Дата начала договора</label>
                                    <input type="text" class="form-control" name="DB_dogovor" placeholder="Дата начала договора" value="{{ $marketingdogovor->DB_dogovor }}">
                                    <label>Дата окончания договора</label>
                                    <input type="text" class="form-control" name="DE_dogovor" placeholder="Дата окончания договора" value="{{ $marketingdogovor->DE_dogovor }}">
                                </div>
                                <div>
                                    <br class="form-group">
                                    <label>Автопролонгация</label>
                                    <input type="checkbox" name="Active" value="{{ $marketingdogovor->AutoRenewal }}"> <br>
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
                                </div>

                        </div>
                            <div class="form-group col-9">
                                        <textarea id="summernote" name="Dogovor_text">
                                            {{ $marketingdogovor->Dogovor_text }}
                                        </textarea>
                            </div>
                        </div>

                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </form>
    </section>

    <!-- Подчиненная таблица по маркетингу -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-1 mb-3">
                    <a href="{{ route('front.marketingdogovor.podch.create',$marketingdogovor->id) }}" class="btn btn-block btn-primary">Добавить</a>
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
                                    <th>Тип маркетинга</th>
                                    <th>Цена</th>
                                    <th>Менеджер</th>
                                    <th>Комментарий</th>
                                    <th colspan="2" class="text-center">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($marketing_dogovor_podches as $marketing_dogovor_podch)
                                    <tr>
                                        <td>{{ $marketing_dogovor_podch->id }}</td>
                                        <td>{{ $marketing_dogovor_podch->TypeMarketing }}</td>
                                        <td>{{ money_format($marketing_dogovor_podch->price) }}</td>
                                        <td>{{ $marketing_dogovor_podch->name }}</td>
                                        <td>{{ $marketing_dogovor_podch->Comment }}</td>
                                        <td><a href="{{ route('front.invoice.create',
                                                                      [
                                                                            'usloviya'=>$marketing_dogovor_podch->id,
                                                                            'sum'=> $marketing_dogovor_podch->price,
                                                                            'comment'=>$marketing_dogovor_podch->Comment,
                                                                            'manager'=>$marketing_dogovor_podch->managers_id
                                                                      ])
                                                                  }}">
                                                <i class="fas fa-file-invoice-dollar"></i></a></td>
                                        <td>
                                            {{-- <a href="{{ route('front.marketingdogovor.edit',$marketingdogovor->id) }}"><i
                                                    class="fas fa-pencil-alt"></i></a> --}}
                                            <button class="fas fa-pencil-alt"
                                                    data-id="{{$marketing_dogovor_podch->id}}"
                                                    data-mymarketing_types_id="{{$marketing_dogovor_podch->marketing_types_id}}"
                                                    data-price="{{$marketing_dogovor_podch->price}}"
                                                    data-mymanagers_id="{{$marketing_dogovor_podch->managers_id}}"
                                                    data-myComment="{{$marketing_dogovor_podch->Comment}}"
                                                        data-toggle="modal" data-target="#edit">Edit
                                            </button>
                                            /
                                            <button class="fas fa-trash text-danger" data-id="{{$marketing_dogovor_podch->id}}"
                                                    data-toggle="modal" data-target="#delete">Delete</button>
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

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Редактирование</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{route('front.marketingdogovor.podch.update','test')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    {{--@include('category.form')--}}
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
                    <input type="number" step="any" class="form-control" name="price" id="price" placeholder="Цена">
                    <label>Менеджер</label>
                    <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true" name="managers_id" id="managers_id">
                        @foreach($managers as $manager)
                            <option value="{{ $manager->id }}" {{ $manager->id==old('managers_id') ? ' selected' : '' }}>
                                {{ $manager->name }}
                            </option>
                        @endforeach
                    </select>

                    <div class="form-group">
                        <label for="comment">Коментарий</label>
                        <textarea name="Comment" id="comment" cols="20" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{route('front.marketingdogovor.podch.delete','test')}}" method="post">
                @csrf
                @method('delete')
                <div class="modal-body">
                    <p class="text-center">
                        Вы действительно хотите удалить запись?
                    </p>
                    <input type="hidden" name="id" id="id">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                    <button type="submit" class="btn btn-warning">Yes, Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
