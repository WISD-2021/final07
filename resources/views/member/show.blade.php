@extends('layouts.master')
@section('title','登山露營器具租借 | 個人資料')

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
                                @foreach ($shows as $show)
                                <div class="select_option_list"><a href="{{ route('member.edit', $show->id) }}">個人資料編輯</a> </div><br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <center>
                        <font size="4">
                           <form name='form' method='post' action='show.blade.php'>

                               @foreach ($shows as $show)

                                   姓名:
                                    <input type='text' style='width: 200px; ' name='uname' readonly value='{{$show->name}}'>
                                   <br><br>
                                   email:
                                   <input type='email' style='width: 200px;  ' name='email' readonly  unselectable='on' value='{{$show->email }}'>
                                   <br><br>
                                   身分證字號:
                                   <input type='text' style='width: 200px; ' name='idt' readonly  unselectable='on' value='{{$show->identity}}'>
                                   <br><br>
                                   手機:
                                   <input type='text' style='width: 200px;' name='uphone' readonly  value='{{$show->phone}}'>
                                   <br><br>
                                   地址:
                                   <input type='text' style='width: 200px;' name='uadd' readonly  value='{{$show->address}}'>
                                   <br><br>
                                   狀態:
                                   <input type='text' style='width: 200px;  ' name='usta' readonly   value='{{$show->name}}'>
                                   <br><br>

                               @endforeach

                           </form>
                        </font>
                    </center>
                </div>
            </div>
        </div>
    </section>
    <!-- product list part end-->

@endsection
