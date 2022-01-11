@extends('admin.layouts.master')

@section('title', '新增器材')

@section('content')
    <!-- Page Heading -->
    <div class="container-fluid px-4">
        <h1 class="mt-4">器材管理</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">器材管理</li>
        </ol>
    </div>
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
            <form action="/admin/eqipments" method="POST" role="form">
                @method('POST')
                @csrf

                <div class="form-group">
                    <label for="title">器材名稱：</label>
                    <input id="title" name="title" class="form-control" placeholder="請輸入文章標題">
                </div>
                <p>&nbsp;</p>
                <div class="form-group">
                    <label for="content">器材資訊：</label>
                    <textarea id="content" name="content" class="form-control" rows="10"></textarea>
                </div>
                <p>&nbsp;</p>
                <div class="form-group">
                    <label for="title">總數量：</label>
                    <input id="title" name="title" class="form-control" placeholder="請輸入文章標題">
                </div>
                <p>&nbsp;</p>
                <div class="form-group">
                    <label for="title">目前出租數：</label>
                    <input id="title" name="title" class="form-control" placeholder="請輸入文章標題">
                </div>
                <p>&nbsp;</p>
                <div class="form-group">
                    <label for="title">庫存數量：</label>
                    <input id="title" name="title" class="form-control" placeholder="請輸入文章標題">
                </div>
                <p>&nbsp;</p>
                <div class="form-group">
                    <label for="title">器材單價：</label>
                    <input id="title" name="title" class="form-control" placeholder="請輸入文章標題">
                </div>
                <p>&nbsp;</p>
                <div class="form-group">
                    <label for="title">租借價格(單項兩天一夜價格)：</label>
                    <input id="title" name="title" class="form-control" placeholder="請輸入文章標題">
                </div>
                <p>&nbsp;</p>
                <div class="form-group">
                    <label for="title">賠償單價：</label>
                    <input id="title" name="title" class="form-control" placeholder="請輸入文章標題">
                </div>
                <p>&nbsp;</p>
                <div class="form-group">
                    <label for="title">清潔費：</label>
                    <input id="title" name="title" class="form-control" placeholder="請輸入文章標題">
                </div>
                <p>&nbsp;</p>
                <div class="form-group">
                    <label for="title">圖片：</label>
                    <input id="title" name="title" class="form-control" placeholder="請輸入文章標題">
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
    <!-- /.row -->
@endsection
