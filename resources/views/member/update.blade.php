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
                                <div class="select_option_list"><a href="#">個人資料編輯</a> </div><br>
                                <div class="select_option_list"><a href="#">變更密碼</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="product_list">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_1.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product.html">Cervical pillow for airplane
                                    car office nap pillow</a> </h3>
                                    <p>From $5</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_2.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product.html">Geometric striped flower home classy decor</a> </h3>
                                    <p>From $5</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_3.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product.html">Foam filling cotton slow rebound pillows</a> </h3>
                                    <p>From $5</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_4.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product.html">Memory foam filling cotton Slow rebound pillows</a> </h3>
                                    <p>From $5</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_5.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product.html">Memory foam filling cotton Slow rebound pillows</a> </h3>
                                    <p>From $5</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_6.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product.html">Sleeping orthopedic sciatica Back Hip Joint Pain relief</a> </h3>
                                    <p>From $5</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_7.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product.html">Memory foam filling cotton Slow rebound pillows</a> </h3>
                                    <p>From $5</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_8.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product.html">Sleeping orthopedic sciatica Back Hip Joint Pain relief</a> </h3>
                                    <p>From $5</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_9.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product.html">Geometric striped flower home classy decor</a> </h3>
                                    <p>From $5</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="img/product/product_list_10.png" alt="#" class="img-fluid">
                                    <h3> <a href="single-product.html">Geometric striped flower home classy decor</a> </h3>
                                    <p>From $5</p>
                                </div>
                            </div>
                        </div>
                        <div class="load_more_btn text-center">
                            <a href="#" class="btn_3">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list part end-->

@endsection
