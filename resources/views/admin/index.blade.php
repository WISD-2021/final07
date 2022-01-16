@extends('admin.layouts.master')

@section('title', '器材管理')

@section('content')
    <!-- Page Heading -->
    <div class="container-fluid px-4">
        <h1 class="mt-4">器材管理</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">器材管理</li>
        </ol>
    </div>


    <div class="card-body">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-edit me-1"></i>
                所有器材列表
            </div>
        </div>
        <!-- /.row -->

        <div class="row" style="margin-bottom: 10px; text-align: left">
            <div class="col-lg-10">
                <a href="{{ route('admin.equipments.create') }}" class="btn btn-success">建立新器材</a>
            </div>
        </div>
        <!-- /.row -->




                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th style="text-align: center">#</th>
                            <th style="text-align: center; width:140px;">圖片</th>
                            <th style="text-align: center;">器材名稱</th>
                            <th style="text-align: center" width="210">器材資訊</th>
                            <th style="text-align: center">總數量</th>
                            <th style="text-align: center">目前出租數</th>
                            <th style="text-align: center">庫存數量</th>
                            <th style="text-align: center">器材單價</th>
                            <th style="text-align: center">租借價格(單向兩天一夜價格)</th>
                            <th style="text-align: center">賠償單價</th>
                            <th style="text-align: center">清潔費</th>
                            <th style="text-align: center" width="120">保養日期</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($equipment as $equipments)
                            <tr>
                                <td style="text-align: center; line-height:30px;">{{ $equipments->id }}</td>
                                <td style="text-align: center"><img src="img/{{ $equipments->img }}" style="height:100px; width:auto;" alt="..." /></td>
                                <td style="text-align: center; line-height:30px;">{{ $equipments->name }}</td>
                                <td style="text-align: left; line-height:30px;">{{ $equipments->eqinformation }}</td>
                                <td style="text-align: center; line-height:30px;">{{ $equipments->allcount }}</td>
                                <td style="text-align: center; line-height:30px;">{{ $equipments->rentcount }}</td>
                                <td style="text-align: center; line-height:30px;">{{ $equipments->inventory }}</td>
                                <td style="text-align: center; line-height:30px;">${{ $equipments->price }}</td>
                                <td style="text-align: center; line-height:30px;">${{ $equipments->rentprice }}</td>
                                <td style="text-align: center; line-height:30px;">${{ $equipments->claimprice }}</td>
                                <td style="text-align: center; line-height:30px;">${{ $equipments->cleanfee }}</td>
                                <td style="text-align: center; line-height:30px;">{{ $equipments->maintain }}</td>


                                <td style="text-align: center; line-height:30px;" width="140">
                                    <a class="btn btn-sm btn-primary" href="{{ route('admin.equipments.edit', $equipments->id) }}">編輯</a>
                                    /
                                    <form action="/admin/equipments/{{$equipments->id}}" method="POST" style="display: inline">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-sm btn-danger" type="submit" onClick="return confirm('確定要刪除此器材?')">刪除</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


    </div>
        <!-- /.row -->


@endsection
