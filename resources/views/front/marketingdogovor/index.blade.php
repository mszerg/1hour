@extends('front.layouts.main')
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
                    <div class="col-1">
                        <a href="{{ route('front.marketingdogovor.create') }}" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                    <div class="col-9">
                        <form action="{{route('front.marketingdogovor.index')}}" method="get">
                            <div class="row">
                                <div class="col mb-3 text-right">
                                    <label>Наименование контрагента</label>
                                </div>
                                <div class="col mb-3">
                                    <select class="form-control select2bs4 select2-hidden-accessible"
                                            style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true"
                                            name="Name_post">
                                        <option></option>
                                        @foreach($posts as $post)
                                            <option value="{{$post->PostNo}}" @if(isset($_GET['Name_post'])) @if($_GET['Name_post'] == $post->PostNo) selected @endif @endif>{{$post->Name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col mb-3">
                                    <input name="search_post" @if(isset($_GET['search_post'])) value="{{$_GET['search_post']}}" @endif type="text" class="form-control" id="search_id" placeholder="Поставщик">
                                </div>
                                <div class="col mb-3">
                                    <button type="submit" class="btn btn-primary">Найти</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-2">
                        <form action="{{route('front.marketingdogovor.index')}}" method="get">
                            <div class="col mb-3">
                                <button type="submit" class="btn btn-primary">Очистить фильтр</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0" style="height: 600px;">
                                {{--<table class="table table-hover text-nowrap">--}}
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Номер Договора</th>
                                        <th>Контрагент</th>
                                        <th>Дата начала договора</th>
                                        <th>Дата конца договора</th>
                                        <th>Автопролонгация</th>
                                        <th>Договор закрыт</th>
                                        <th colspan="2" class="text-center">Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($marketingdogovors as $marketingdogovor)
                                        <tr data-widget="expandable-table" aria-expanded="false">
                                            <td>{{ $marketingdogovor->id }}</td>
                                            <td>{{ $marketingdogovor->NumDogovor }}</td>
                                            <td>{{ $marketingdogovor->post->Name }}</td>
                                            <td>{{ \Carbon\Carbon::parse($marketingdogovor->DB_dogovor)->format('d.m.Y') }}</td>
                                            <td>{{ $marketingdogovor->DE_dogovor ? \Carbon\Carbon::parse($marketingdogovor->DE_dogovor)->format('d.m.Y') : null}}</td>
                                            <td>{{ $marketingdogovor->AutoRenewal }}</td>
                                            <td>{{ $marketingdogovor->Active }}</td>
                                            <td>
                                                <a href="{{ route('front.marketingdogovor.edit',$marketingdogovor->id) }}"><i
                                                        class="fas fa-pencil-alt"></i></a></td>
                                            <td>
                                                <form
                                                    action="{{ route('front.marketingdogovor.delete',$marketingdogovor->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="fas fa-trash text-danger" role="button"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr class="expandable-body">
                                            <td style="width:0;">
                                                <p></p>
                                            </td>
                                            <td style="width:0;">
                                                @foreach($MarketingDogovorPodches->where('marketing_dogovors_id',$marketingdogovor->id) as $MarketingDogovorPodch)
                                                    <div class="row">{{ $MarketingDogovorPodch->TypeMarketing }}</div>
                                                @endforeach
                                            </td>
                                            <td style="width:0;">
                                                @foreach($MarketingDogovorPodches->where('marketing_dogovors_id',$marketingdogovor->id) as $MarketingDogovorPodch)
                                                    <div class="row">
                                                            {{number_format($MarketingDogovorPodch->price,2,',',' ')}}
                                                    </div>
                                                @endforeach
                                            </td>
                                            <td style="width:0;">
                                                @foreach($MarketingDogovorPodches->where('marketing_dogovors_id',$marketingdogovor->id) as $MarketingDogovorPodch)
                                                    <div class="row">{{ $MarketingDogovorPodch->name }}</div>
                                                @endforeach
                                            </td>
                                            <td style="width:0;">
                                                @foreach($MarketingDogovorPodches->where('marketing_dogovors_id',$marketingdogovor->id) as $MarketingDogovorPodch)
                                                    <div class="row">{{ $MarketingDogovorPodch->Comment }}</div>
                                                @endforeach
                                            </td>
                                            <td style="width:0;">
                                                @foreach($MarketingDogovorPodches->where('marketing_dogovors_id',$marketingdogovor->id) as $MarketingDogovorPodch)
                                                    <div class="row">
                                                        <a href="{{ route('front.invoice.create',
                                                                      [
                                                                            'usloviya'=>$MarketingDogovorPodch->id,
                                                                            'sum'=> $MarketingDogovorPodch->price,
                                                                            'comment'=>$MarketingDogovorPodch->Comment,
                                                                            'manager'=>$MarketingDogovorPodch->managers_id
                                                                      ])
                                                                  }}">
                                                            <i class="fas fa-file-invoice-dollar"></i></a>
                                                    </div>
                                                @endforeach
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
