@extends('layouts.master')
@section('title','登山露營器具租借 | 個人資料編輯')
@section('content')

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>編輯{{Auth::user()->name}}的個人資料</h2>
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
                                @foreach ($members as $member)
                                    <div class="select_option_list"><a href="{{ route('member.edit', $member->id) }}">個人資料編輯</a> </div><br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <center>
                        <font size="4">
                            @foreach ($members as $member)
                            <form  method='post' action='{{route('member.update',$member->id)}}'  role="form">
                                @method('PUT')
                                @csrf

                                    姓名:
                                    <input type='text' style='width: 200px;' name='name' value='{{$member->name}}'>
                                    <br><br>

                                    email:
                                    <input type='email' style='width: 200px; color:#aa0a5f; background-color:#acacac' name='email' readonly  unselectable='on' value='{{$member->email }}'>
                                    <br><br>
                                    身分證字號:
                                    <input type='text' style='width: 200px; color:#aa0a5f; background-color:#acacac' name='idt' readonly  unselectable='on' value='{{$member->identity}}'>
                                    <br><br>
                                    手機:
                                    <input type='text' style='width: 200px;' name='phone'  value='{{$member->phone}}'>
                                    <br><br>
                                    地址:
                                    <input type='text' style='width: 200px;' name='address'  value='{{$member->address}}'>
                                    <br><br>
                                    狀態:
                                    <input type='text' style='width: 200px; color:#aa0a5f; background-color:#acacac' name='usta' readonly   value='{{$member->name}}'>
                                    <br><br>
                                    <input type="submit"  class="btn btn-success" name="submit" value="修改"></input>
                            </form>
                            @endforeach
                        </font>
                    </center>
                </div>
            </div>
        </div>
    </section>
    <!-- product list part end-->

@endsection
