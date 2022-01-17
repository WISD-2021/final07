@extends('layouts.master')
@section('title','登山露營器具租借 | 租賃器材')
@section('content')

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>租賃器材</h2>
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
                                <div class="select_option_list">器材類別<i class="right fas fa-caret-down"></i> </div>
                                <div class="select_option_dropdown">
                                    <p><a href="#">帳篷</a></p>
                                    <p><a href="#">登山包</a></p>
                                    <p><a href="#">睡袋/睡墊</a></p>
                                    <p><a href="#">客廳帳</a></p>
                                    <p><a href="#">炊具</a></p>
                                    <p><a href="#">其他</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="product_list">
                        <div class="row">
                            @foreach($equipments as $equipment)
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="/img/equi/{{$equipment->img}}" alt="{{$equipment->name}}" class="img-fluid">
                                    <p><h3>{{$equipment->name}} </h3></p>
                                    <p><h3> {{$equipment->eqinformation}}</h3></p>
                                    <form action="{{route('rentcart.add')}}" method="post" role="form">
                                    @method('post')
                                    @csrf
                                        <label for="quantity">數量:</label>
                                        <select id="num" name="num">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <br><br>
                                        <input type="hidden" name="e_id" value="{{$equipment->id}}">
                                        <input type="hidden" name="name" value="{{$equipment->name}}">
                                        <input type="hidden" name="price" value="{{$equipment->price}}">

                                        <button type="submit" onclick="return confirm('是否確認加入購物車?')"
                                                class="btn btn-sm btn-primary" style="height: 50px;width: 200px">加入購物車
                                        </button>
                                    </form>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list part end-->

@endsection
