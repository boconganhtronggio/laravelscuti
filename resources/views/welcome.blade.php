<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ url('public/css/app.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ url('public/css/1.css') }}">
</head>
<body>
 <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href=""><img src="http://st.f1.shop.vnecdn.net/i/v9/graphics/logovne_footer.png" alt="" class="img-responsive"></a>
      </div>
   
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nhập tên sản phẩm bạn muốn tìm">
          </div>
          <button type="submit" class="btn btn-default">
            <b class="glyphicon glyphicon-search"></b>
          </button>
        </form>

        <ul class="nav navbar-nav navbar-right">
         
      @if(Auth::guest())
          <li>
            <a href="{!! route('admin.user.register') !!}">Register</a>
          </li>
          @else
          <li>
            <div class="dangnhap">
               Chào ! {{ Auth::user()->username }}
            </div>
          </li>
          @endif
          <li>
            <div class="dangnhap">
            <li><a href="{{ URL::to('admin/user/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>

            </div>
          </li>
        </ul>
        <ul>
          
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
   </nav> <!-- end menu -->
   <div class="container anhnen">
    <div class="row">
      <div id="carousel-id" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-id" data-slide-to="0" class=""></li>
          <li data-target="#carousel-id" data-slide-to="1" class=""></li>
          <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item">
            <img src="http://img.f3.shop.vnecdn.net/banner/2016/08/05/57a43acc7f70c-880x380px.gif" alt="" class="img-responsive">
            <div class="container">
              
            </div>
          </div>
          <div class="item">
            <img src="http://img.f2.shop.vnecdn.net/banner/2016/07/25/5795a472cfb37-880x380px.gif" alt="" class="img-responsive">
            <div class="container">
              
            </div>
          </div>
          <div class="item active">
            <img src="http://img.f1.shop.vnecdn.net/banner/2016/08/03/57a157c644165-880x380px.gif" alt="" class="img-responsive">
            <div class="container">
              
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
    </div>
   </div> <!-- end silde -->
   <div class="container gach-ngang">
      <div class="row">
         <div class="col-xs-2 col-sm-12 col-md-2 col-lg-2">
            <h4>CÔNG NGHỆ</h4>
         </div>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 gach-ngang-1">
           <hr>
        </div>
      </div>
   </div> <!-- end gach ngang -->
   <div class="container name-dt">
      <div class="row">
         <div class="col-xs-12 Col-sm-12 col-md-3 col-lg-3 ">
            <div class="item">
                     <img src="http://img.f4.shop.vnecdn.net/banner/2016/07/06/577cd1b567468-577ccfebe3669-5779da540eead-1.jpg" alt="" class="img-responsive">
                     <div class="container">
                        <div class="carousel-caption">
                           
                        <a href=""><span>Điện thoại</span></a>
                        </div>
                     </div>
            </div>
         </div>
         <div class="col-xs-12 Col-sm-12 col-md-3 col-lg-3 ">
             <div class="item">
                     <img src="http://img.f4.shop.vnecdn.net/banner/2016/07/06/577cd1b885844-5779e4c0ab0d5-12.jpg" alt="" class="img-responsive">
                     <div class="container">
                        <div class="carousel-caption">
                           
                        <a href=""><span>Ipad</span></a>
                        </div>
                     </div>
            </div>

         </div>
         <div class="col-xs-12 Col-sm-12 col-md-3 col-lg-3 ">
            <div class="item">
                     <img src="http://img.f2.shop.vnecdn.net/banner/2016/07/06/577cd1bc9fe19-5779dae99a651-2.jpg" alt="" class="img-responsive">
                     <div class="container">
                        <div class="carousel-caption">
                           
                        <a href=""><span>Laptop</span></a>
                        </div>
                     </div>
            </div>
         </div>
         <div class="col-xs-12 Col-sm-12 col-md-3 col-lg-3 ">
            <div class="item">
                     <img src="http://img.f2.shop.vnecdn.net/banner/2016/07/06/577cd1bf980ab-5779daef9d379-3.jpg" alt="" class="img-responsive">
                     <div class="container">
                        <div class="carousel-caption">
                           
                        <a href=""><span>Phụ kiện</span></a>
                        </div>
                     </div>
            </div>
         </div>
      </div>
   </div> <!-- Send name-dt -->
   <div class="container sanpham1">
      <div class="row ">
         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4  anh1">
            <div class="row anh1-trong">
               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xs-24 col-sm-3">
                  <img src="http://img.f4.shop.vnecdn.net/images/2016/06/20/57676f22422ab-iPhone_5s_Vang_150x150.png" alt="" class="img-responsive">
               </div>
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-24 col-sm-3  anh-trong1">
                  <p class="name">Xiaomi Redmi Note 3 (RAM 2GB)</p>
                  <p class="price">3.790.000 đ</p>
                  <p class="price-true">giá thực tế 2.990.000 đ</p> 
               </div>
               <div class="layer-discount">3%</div>
            </div>

         </div>
         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4  anh1">
            <a href=""><img src="http://img.f3.shop.vnecdn.net/images/2016/06/29/5773436686835-Xiaomi-Mi4-trang_150x150.jpg" alt="" class="img-responsive"></a>
            <p class="name">Xiaomi Mi4</p>
            <p class="price">2.890.000 đ</p>
         <p class="price-true">giá thực tế 2.990.000 đ</p>
         <div class="layer-discount">3%</div>
         </div>
         
         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4  anh1">
            <a href=""><img src="http://img.f2.shop.vnecdn.net/images/2016/06/21/5769142cb6175-1_150x150.png" alt="" class="img-responsive"></a>
            <p>Xiaomi Mi4</p>
            <p class="price">2.890.000 đ</p>
         <p class="price-true">giá thực tế 2.990.000 đ</p>
          <div class="layer-discount">3%</div>
         </div>

      </div>
   </div> <!-- end Xiaomi  -->
   <div class="container sanpham2">
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 anh1">
            <a href=""><img src="http://img.f2.shop.vnecdn.net/images/2016/06/21/5769142cb6175-1_150x150.png" alt=""></a>
            <p>Xiaomi Mi4</p>
            <p class="price">2.890.000 đ</p>
            <p class="price-true">giá thực tế 2.990.000 đ</p>
            <div class="layer-discount">3%</div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 anh1">
            <a href=""><img src="http://img.f2.shop.vnecdn.net/images/2016/06/21/5769142cb6175-1_150x150.png" alt=""></a>
            <p>Xiaomi Mi4</p>
            <p class="price">2.890.000 đ</p>
            <p class="price-true">giá thực tế 2.990.000 đ</p>
            <div class="layer-discount">3%</div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 anh1">
            <a href=""><img src="http://img.f2.shop.vnecdn.net/images/2016/06/21/5769142cb6175-1_150x150.png" alt=""></a>
            <p>Xiaomi Mi4</p>
            <p class="price">2.890.000 đ</p>
            <p class="price-true">giá thực tế 2.990.000 đ</p>
            <div class="layer-discount">3%</div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 anh1">
            <a href=""><img src="http://img.f2.shop.vnecdn.net/images/2016/06/21/5769142cb6175-1_150x150.png" alt=""></a>
            <p>Xiaomi Mi4</p>
            <p class="price">2.890.000 đ</p>
            <p class="price-true">giá thực tế 2.990.000 đ</p>
            <div class="layer-discount">3%</div>
         </div>
      </div>
   </div> <!-- end nenanh2
    -->
    <div class="container nenanh3">
       <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
             <img src="http://img.f2.shop.vnecdn.net/banner/2016/07/25/5795a552957ff-578x200px.gif" alt="">
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
             <img src="http://img.f2.shop.vnecdn.net/banner/2016/08/05/57a43b2d8a592-578x200px.gif" alt="">
          </div>
       </div>
    </div><!--  end sanpham2 -->
    <div class="container sanpham1">
      <div class="row ">
         <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 anh1">
            <div class="row anh1-trong">
               <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <img src="http://img.f4.shop.vnecdn.net/images/2016/06/20/57676f22422ab-iPhone_5s_Vang_150x150.png" alt="">
               </div>
               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 anh-trong1">
                  <p class="name">Xiaomi Redmi Note 3 (RAM 2GB)</p>
                  <p class="price">3.790.000 đ</p>
                  <p class="price-true">giá thực tế 2.990.000 đ</p> 
               </div>
               <div class="layer-discount">3%</div>
            </div>

         </div>
         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 anh1">
            <a href=""><img src="http://img.f3.shop.vnecdn.net/images/2016/06/29/5773436686835-Xiaomi-Mi4-trang_150x150.jpg" alt=""></a>
            <p class="name">Xiaomi Mi4</p>
            <p class="price">2.890.000 đ</p>
         <p class="price-true">giá thực tế 2.990.000 đ</p>
         <div class="layer-discount">3%</div>
         </div>
         
         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 anh1">
            <a href=""><img src="http://img.f2.shop.vnecdn.net/images/2016/06/21/5769142cb6175-1_150x150.png" alt=""></a>
            <p>Xiaomi Mi4</p>
            <p class="price">2.890.000 đ</p>
         <p class="price-true">giá thực tế 2.990.000 đ</p>
          <div class="layer-discount">3%</div>
         </div>

      </div>
   </div> 
   <div class="container sanpham2">
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 anh1">
            <a href=""><img src="http://img.f2.shop.vnecdn.net/images/2016/06/27/5770e73b67dc3-nokia-830-orange_150x150.jpg" alt=""></a>
            <p>Xiaomi Mi4</p>
            <p class="price">2.890.000 đ</p>
            <p class="price-true">giá thực tế 2.990.000 đ</p>
            <div class="layer-discount">3%</div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 anh1">
            <a href=""><img src="http://img.f2.shop.vnecdn.net/images/2016/06/27/5770e73b67dc3-nokia-830-orange_150x150.jpg" alt=""></a>
            <p>Xiaomi Mi4</p>
            <p class="price">2.890.000 đ</p>
            <p class="price-true">giá thực tế 2.990.000 đ</p>
            <div class="layer-discount">3%</div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 anh1">
            <a href=""><img src="http://img.f2.shop.vnecdn.net/images/2016/06/21/5769142cb6175-1_150x150.png" alt=""></a>
            <p>Xiaomi Mi4</p>
            <p class="price">2.890.000 đ</p>
            <p class="price-true">giá thực tế 2.990.000 đ</p>
            <div class="layer-discount">3%</div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 anh1">
            <a href=""><img src="http://img.f2.shop.vnecdn.net/images/2016/06/21/5769142cb6175-1_150x150.png" alt=""></a>
            <p>Xiaomi Mi4</p>
            <p class="price">2.890.000 đ</p>
            <p class="price-true">giá thực tế 2.990.000 đ</p>
            <div class="layer-discount">3%</div>
         </div>
      </div>
   </div> 
   <div class="container gach-ngang">
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <h4>TIN TỨC</h4>
         </div>
        <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 gach-ngang-1">
           <hr>
        </div>
      </div>
   </div> <!-- end gach ngang -->
   <div class="footer">


</body>
</html>
