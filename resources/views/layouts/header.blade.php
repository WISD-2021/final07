<?php
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\OrderController;
use App\Models\Cart_item;
?>
<!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ url('/')}}"> <img src="img/logo-2.png" alt="登山露營器材租借" width="200px"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <!--<li class="nav-item">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('about')}}">關於我們</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('rentequipment')}}">裝備租賃</a>
                                </li>


                                <div class="hearer_icon d-flex align-items-center">
                                    <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                                    <a href="{{ url('rentcart')}}">
                                        <i class="flaticon-shopping-cart-black-shape"></i>
                                    </a>
                                    @if (Route::has('login'))
                                            @auth
                                                <a href="{{ url('/')}}" class="text-sm text-gray-700 dark:text-gray-500 underline"></a>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        {{Auth::user()->name}}
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                                        <a class="dropdown-item" href="{{ url('member')}}"> 個人資料</a><!--還沒設計好-->
                                                        <a class="dropdown-item" href="{{ url('Order')}}">租賃單</a><!--還沒設計好-->
                                                    </div>
                                                </li>
                                                <!--登出-->
                                                    <li>
                                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                            <i class="glyphicon glyphicon-log-out"></i>
                                                        </a>
                                                    </li>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                <!--登出-->
                                            @else
                                                <a href="{{ route('login') }}" ><i class="glyphicon glyphicon-user"></i></a>

                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}" ><i class="fas fa-registered"></i></a>
                                                @endif
                                            @endauth
                                    @endif
                                </div>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->
