@extends('admin.layouts.master')

@section('title', '會員管理')

@section('content')
    <!-- Page Heading -->
    <div class="container-fluid px-4">
        <h1 class="mt-4">會員管理</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">會員管理</li>
        </ol>
    </div>


    <div class="card-body">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-edit me-1"></i>
                所有會員列表
            </div>
        </div>
    <!-- /.row

     /.row -->


                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th  style="text-align: center">編號</th>
                        <th  style="text-align: center">會員名稱</th>
                        <th>電子郵件 Email</th>
                        <th  style="text-align: center">身分證</th>
                        <th  style="text-align: center">電話</th>
                        <th  style="text-align: center">地址</th>
                        <th  style="text-align: center">狀態</th>
                        <th  style="text-align: center">加入時間</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($member as $members)
                        <tr>
                            <td style="text-align: center">{{ $members->id }}</td>
                            @foreach($user as $users)
                                @if($members->user_id == $users->id)
                                    <td style="text-align: center">{{ $users->name }}</td>
                                    <td>{{ $users->email}}</td>
                                    <td>{{ $members->identity }}</td>
                                    <td>{{ $members->phone }}</td>
                                    <td>{{ $members->address }}</td>
                                    <form action="/admin/members/{{$members->id}}" method="POST" role="form">
                                        @method('PATCH')
                                        @csrf
                                    <td><select id="status" name="status" class="form-control" >
                                            <option>{{ old('address',$members->status) }}</option>
                                            <option>使用中</option>
                                            <option>已停用</option>
                                        </select></td>
                                    <td>{{ $users->created_at }}</td>
                                    <td style="text-align: center; line-height:30px;" width="140">
                                        <button type="submit" class="btn btn-primary">更新</button>
                                    </td>
                                    </form>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                </table>

    <!-- /.row -->
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
@endsection
