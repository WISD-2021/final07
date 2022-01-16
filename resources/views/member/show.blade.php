@extends('layouts.master')
@section('title','登山露營器具租借 | 租賃器材')
@section('content')

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>{{Auth::user()->name}}的個人資料</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!-- product list part start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="product_sidebar">
                        <div class="single_sedebar">
                            <div class="select_option">
                                <div class="select_option_list"><a href="{{route('member.edit')}}">個人資料編輯</a> </div><br>
                                <div class="select_option_list"><a href="{{route('member.pwd')}}">變更密碼</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="product_list">
                        <div class="row">
                           <form name='form' method='post' action='show.blade.php'>
                               <table>
                                   <thead>
                                   <tr>
                                       <th>姓名</th>
                                       <th>email</th>
                                       <th>身分證字號</th>
                                       <th>手機</th>
                                       <th>地址</th>
                                       <th>狀態</th>
                                       <th>操作</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   @foreach ($shows as $show)
                                       <tr>
                                           <td>{{$show->users.name}}</td>
                                           <td>{{$show->users.email }}</td>
                                           <td>{{$show->members.identity}}</td>
                                           <td>{{$show->members.phone}}</td>
                                           <td>{{$show->members.address}}</td>
                                           <td></td>
                                           <td></td>
                                       </tr>
                                   @endforeach
                                   </tbody>
                               </table>
                           </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list part end-->

@endsection
