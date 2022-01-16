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
            新增器材
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-info-circle"></i>  <strong>警告！</strong> 請修正表單錯誤：
            </div>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <form action="/admin/equipments/store" method="POST" role="form">
                @method('POST')
                @csrf

                <div class="form-group">
                    <label for="name">器材名稱：</label>
                    <input id="name" name="name" class="form-control" placeholder="輸入器材名稱">
                </div>
                <p>&nbsp;</p>
                <div class="form-group">
                    <label for="eqinformation">器材資訊：</label>
                    <textarea id="eqinformation" name="eqinformation" class="form-control" rows="10"></textarea>
                </div>
                <p>&nbsp;</p>
                <div class="form-group">
                    <label for="allcount">總數量：</label>
                    <input id="allcount" name="allcount" class="form-control" placeholder="輸入總數量">
                </div>
                <p>&nbsp;</p>
                <div class="form-group">
                    <label for="rentcount">目前出租數：</label>
                    <input id="rentcount" name="rentcount" class="form-control" placeholder="輸目前出租數" >
                </div>
                <p>&nbsp;</p>
                <div class="form-group">
                    <label for="inventory">庫存數量：</label>
                    <input id="inventory" name="inventory" class="form-control" placeholder="輸入庫存數量" >
                </div>
                <p>&nbsp;</p>
                <div class="form-group">
                    <label for="price">器材單價：</label>
                    <input id="price" name="price" class="form-control" placeholder="輸入器材單價" >
                </div>
                <p>&nbsp;</p>
                <div class="form-group">
                    <label for="rentprice">租借價格(單項兩天一夜價格)：</label>
                    <input id="rentprice" name="rentprice" class="form-control" placeholder="請輸入租借價格" >
                </div>
                <p>&nbsp;</p>
                <div class="form-group">
                    <label for="claimprice">賠償單價：</label>
                    <input id="claimprice" name="claimprice" class="form-control" placeholder="輸入賠償單價" >
                </div>
                <p>&nbsp;</p>
                <div class="form-group">
                    <label for="cleanfee">清潔費：</label>
                    <input id="cleanfee" name="cleanfee" class="form-control" placeholder="輸入清潔費" >
                </div>
                <p>&nbsp;</p>
                <div class="form-group">
                    <label for="img">圖片檔：</label>
                    <input id="img" type="file" name="img" class="form-control" placeholder="請輸入圖片檔名">
                </div>

                <p>&nbsp;</p>

                <div class="text-right">
                    <button type="submit" class="btn btn-success">新增</button>
                </div>

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

            </form>
        </div>
    </div>
    </div>
    <!-- /.row -->
@endsection
