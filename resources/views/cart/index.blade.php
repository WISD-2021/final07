<?php
use App\Http\Controllers\CartItemController;
use App\Models\Cart_item;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
$userid =DB::table('members')->where('user_id' ,Auth::user()->id)->first();
// index
$carts = DB::table('cart_items')
    ->join('equipments', 'cart_items.equipment_id', '=', 'equipments.id')
    ->join('members', 'cart_items.member_id', '=', 'members.id')
    ->where('cart_items.member_id', $userid)
    ->select('cart_items.id',
        'equipments.name',
        'equipments.price',
        'equipments.img',
        'cart_items.quantity')
    ->get();
$total = CartItemController::total();
?>
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>購物車</title>
    <link rel="icon" href="img/camping.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- icon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--::header part start::-->
 @include(layouts.header);
    <!-- Header part end-->

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>cart list</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

  <!--================Cart Area =================-->
  <section class="cart_area section_padding">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">商品圖片</th>
                <th scope="col">商品名稱</th>
                <th scope="col">單價</th>
                <th scope="col">數量</th>
                <th scope="col">小計</th>
                <th scope="col">操作</th>
              </tr>
            </thead>
              @foreach($carts as $cart)
            <tbody>
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="/img/equi/{{$cart->img}}" alt="" />
                    </div>
                    <div class="media-body">
                      <p>{{$cart->name}}</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>${{$cart->price}}</h5>
                </td>
                <td>
                    <h5>${{$cart->quantity}}</h5>
                </td>
                <td>
                  <h5>{{$cart->quantity*$cart->price}}</h5>
                </td>
                  <form action="{{route('rentcart.destroy',$cart->id)}}" method="POST" style="display:inline">
                  @method('delete')
                  @csrf
                      <td class="align-middle" style="width:150px ">
                          <button type="submit" style="border: 0;background-color: white">移出購物車<i class="far fa-trash-alt mr-3"></i></button>
                      </td>
                  </form>
              </tr>
            </tbody>
                  <?php $total = $total + $cart->quantity*$cart->price ?>
              @endforeach
          </table>
            <table align="center">
                <td colspan="4"><h1>合計 ${{$total}}</h1></td>
            </table>
        </div>
          <button class="btn btn-secondary mr-2" style="background-color: white"><a
                  href="{{route('equipment.index')}}">繼續選購</a>
          </button>

          <form action="{{route('renteorder.store')}}" method="POST" style="display:inline">{{ csrf_field() }}
              <input type="hidden" name="total" value="{{$total}}">
              <button type="submit" onclick="return confirm('是否確認結帳?')" class="btn btn-primary">確認結帳</button>
          </form>
      </div>
    </div>
  </section>
  <!--================End Cart Area =================-->
    <!--::footer_part start::-->
  @include(layouts.footer);
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/mixitup.min.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>
