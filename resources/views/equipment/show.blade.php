@extends('layouts.master')
@section('title','登山露營器具租借 | 個人資料')

@section('content')

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <form action="/rentcart/store" method="post" role="form">
                        @method('POST')
                        @csrf
                        <input type="hidden" name="users_id" value="{{$name}}">
                        <table class="table table-bordered table-hover bg-white">
                            <thead>
                            <tr>
                                <th width="15%" style="text-align: center">編號</th>
                                <th width="10%" style="text-align: center">圖片</th>
                                <th width="10%" style="text-align: center">名稱</th>
                                <th width="10%" style="text-align: center">資訊</th>
                                <th width="10%" style="text-align: center">價格</th>
                                <th width="10%" style="text-align: center">數量</th>
                                <th width="20%" style="text-align: center">加入購物車</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($equipment as $equipment)
                                <tr>
                                    <td style="text-align: center;line-height:100px;">
                                        {{$equipment->id}}
                                        <input type="hidden" name="food_id" value="{{$equipment->id}}">
                                    </td>
                                    <td style="text-align: center;line-height:100px;">
                                        <img class="" src="/img/equi/{{ url($equipment->img) }}" style="width:100px;height:100px" >&nbsp&nbsp
                                    </td>
                                    <td style="text-align: center;line-height:100px; width: 30%;">
                                        {{$equipment->name}}
                                    </td>
                                    <td style="text-align: center;line-height:100px;">
                                        ${{$equipment->eqinformation}}
                                    </td>
                                    <td style="text-align: center;line-height:100px;">
                                        ${{$equipment->price}}
                                    </td>
                                    <td style="text-align: center;vertical-align: middle;">
                                        <input style="width: 50%;" type="number" name="amount" min="1" max="99" value="1">
                                    </td>
                                    <td style="text-align: center;line-height:100px;">
                                        <button type="submit" class="btn btn-sm btn-primary">送出</button>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- product list part end-->

@endsection
