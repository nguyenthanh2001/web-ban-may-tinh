<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---------Seo--------->
    <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link  rel="canonical" href="{{$url_canonical}}" />
    <meta name="author" content="">
    <link  rel="icon" type="image/x-icon" href="" />
    
    {{--   <meta property="og:image" content="{{$image_og}}" />  
      <meta property="og:site_name" content="http://localhost/tutorial_youtube/shopbanhanglaravel" />
      <meta property="og:description" content="{{$meta_desc}}" />
      <meta property="og:title" content="{{$meta_title}}" />
      <meta property="og:url" content="{{$url_canonical}}" />
      <meta property="og:type" content="website" /> --}}
    <!--//-------Seo--------->
    <title>{{$meta_title}}</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
     <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
   

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{('public/frontend/images/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

<link rel="shortcut icon" href="{{('public/frontend/style/images/favicon.ico')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Load fonts style after rendering the layout styles -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{asset('public/frontend/style/css/fontawesome.min.css')}}">
    <link href="{{asset('public/frontend/style/css/bootstrap1.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/style/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/style/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/style/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/style/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/style/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/style/css/responsive.css')}}" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" href="{{asset('public/frontend/images/apple-touch-icon-57-precomposed.png')}}">

	<link rel="shortcut icon" href="{{asset('public/frontend/style/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('public/frontend/style/images/apple-touch-icon.png')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/style/css/bootstrap2.min.cs')}}s">
    <link rel="stylesheet" href="{{asset('public/frontend/style/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/style/css/versions.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/style/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/style/css/custom.css')}}">

	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('public/frontend/stylecontact/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/stylecontact/css/style.css')}}" rel="stylesheet"> -->
	<link rel="shortcut icon" href="{{asset('public/frontend/images/gif_logo.gif')}}" />

</head><!--/head-->

<body>

<header id="header"><!--header-->
		<header class="top-navbar"> <!--MENU-->
			<nav class="navbar navbar-expand navbar-light bg-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="{{URL::to('/trang-chu')}}">
						<img style="width: 250px; height: 70px" src="{{asset('public/frontend/images/gif_logo.gif')}}" alt="" />
					</a>
					<div class="collapse navbar-collapse text-dark" id="navbars-host">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item text-dark"><a  class="nav-link" href="{{URL::to('/trang-chu')}}"><i class="fa fa-home"></i> Home</a></li>
							<li class="nav-item"><a class="nav-link" href="{{URL::to('/about')}}">About Us</a></li>
							<li class="nav-item"><a class="nav-link" href="{{URL::to('/blog')}}">Blog</a></li>
							
							
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Product</a>
								<div class="dropdown-menu" aria-labelledby="dropdown-a">
									@foreach($category as $key => $cate)
										<a style="font-size: 20px;" class="dropdown-item" href="{{URL::to('/danh-muc/'.$cate->slug_category_product)}}">{{$cate->category_name}}</a>
									@endforeach
								</div>
							</li>
							
							<li class="nav-item"><a class="nav-link" href="{{URL::to('/contact')}}">Contact</a></li>
							<li class="nav-item"><a class="nav-link" href="{{URL::to('/gio-hang')}}"> <i class="fa fa-shopping-cart"></i> Cart</a></li>

							<?php
								$customer_id = Session::get('customer_id');
								$shipping_id = Session::get('shipping_id');
								if($customer_id!=NULL && $shipping_id==NULL){ 
							?>
								<li class="nav-item"><a class="nav-link" href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
							<?php
								}elseif($customer_id!=NULL && $shipping_id!=NULL){
							?>
								<li class="nav-item"><a class="nav-link" href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
							<?php 
							}else{
							?>
								<li class="nav-item"><a class="nav-link" href="{{URL::to('/login')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
							<?php
							}
							?>

						</ul>
                        
						<ul class="nav navbar-nav navbar-right">
						<?php
								$customer_id = Session::get('customer_id');
								if($customer_id!=NULL){ 
							?>
								<li >
                                    <a style="color: black;" class="hover-btn-new log" href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i><span><b>Logout</b></span></a><br>
                                    <img style="width: 50%;" src="{{Session::get('customer_picture')}}" alt=""> {{Session::get('customer_name')}}
                                </li>
							
							<?php
								}else{
							?>
								<li ><a style="color: black;" class="hover-btn-new log" href="{{URL::to('/login')}}"><i class="fa fa-lock"></i><span><b>Login</b></span></a></li>
							<?php 
								}
							?> 
						</ul>
					</div>
				</div>
			</nav>
			
		</header>

		<section id="slider"><!--ANH BIA SILDER-->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						
                        <style type="text/css">
                            img.img.img-responsive.img-slider {
                                height: 380px;
                            }
                        </style>
                        <div class="carousel-inner">
                            @php 
                                $i = 0;
                            @endphp
                            @foreach($slider as $key => $slide)
                            @php 
                                $i++;
                            @endphp
                            <div class="item {{$i==1 ? 'active' : '' }}">
                                
                                <div class="col-sm-12">
                                    <img alt="{{$slide->slider_desc}}" src="{{asset('public/uploads/slider/'.$slide->slider_image)}}" height="200" width="100%" class="img img-responsive img-slider">
                                   
                                </div>
                            </div>
                        @endforeach  
                          
                            
                        </div>
							
							<a style="padding-left: 115px;" href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
							<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
						
					</div>
				</div>
			</div>
		</section><!--/slider-->

		<div class="header-bottom"><!--TIM KIM SAN PHAM-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="navbar-header">
							
						</div>
						<div class="mainmenu pull-left">
							
						</div>
					</div>
					<div class="col-sm-12">
                        <form action="{{URL::to('/tim-kiem')}}" method="POST">
                            {{csrf_field()}}
                        <div class="search_box pull-right">
                            <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm" style="width: 400px"/>
                            <input type="submit" style="margin-top:0;color:#666" name="search_items" class="btn btn-warning " value="Tìm kiếm" ư>
                        </div>
                        </form>
                    </div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section> <!--DANH MUC - THUONG HIEU - SANPHAM-->
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
                        <h2>Danh mục sản phẩm</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                          	@foreach($category as $key => $cate)
                           
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="{{URL::to('/danh-muc/'.$cate->slug_category_product)}}">{{$cate->category_name}}</a></h4>
									</div>
								</div>
							@endforeach
                        </div><!--/category-products-->

						<h2>Thương hiệu sản phẩm</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
							@foreach($brand as $key => $brand)
                           
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="{{URL::to('/thuong-hieu/'.$brand->brand_slug)}}"> {{$brand->brand_name}}</a></h4>
									</div>
								</div>
							@endforeach
                        </div><!--/category-products-->
                    
                    </div>
				</div>
				
				<div class="col-sm-9 padding-right">
					
                        @yield('content')
                    
				</div>
			</div>
		</div>
	</section>
	
	<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
							<h2 style="color: #FFFFFF;"><strong style="color: rgb(255, 136, 0);">X </strong>- GAMING</h2>
                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                        <p>Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Pricing</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Faq</a></li>
							<li><a href="#">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">info@yoursite.com</a></li>
                            <li><a href="#">www.yoursite.com</a></li>
                            <li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                            <li>+61 3 8376 6284</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
        <div>
            <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "101670302589873");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v14.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
        </div>
    </footer><!-- end footer -->
    
    


    
	<script src="{{asset('public/frontend/style/js/all.js')}}"></script>
		<script src="{{asset('public/frontend/style/js/custom.js')}}"></script>
		<script src="{{asset('public/frontend/style/js/timeline.min.js')}}"></script>
		<script src="{{asset('public/frontend/style/js/modernizer.js')}}"></script>

		<script src="{{asset('public/frontend/style/js/jquery.js')}}"></script>
		<script src="{{asset('public/frontend/style/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('public/frontend/style/js/jquery.scrollUp.min.js')}}"></script>
		<script src="{{asset('public/frontend/style/js/price-range.js')}}"></script>
		<script src="{{asset('public/frontend/style/js/jquery.prettyPhoto.js')}}"></script>
    	<script src="{{asset('public/frontend/style/js/main.js')}}"></script>

		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
		<script src="{{asset('public/frontend/style/stylecontact/lib/easing/easing.min.js')}}"></script>
		<script src="{{asset('public/frontend/style/stylecontact/lib/waypoints/waypoints.min.js')}}"></script>
		<script src="{{asset('public/frontend/style/stylecontact/lib/counterup/counterup.min.js')}}"></script>
		<script src="{{asset('public/frontend/style/stylecontact/lib/owlcarousel/owl.carousel.min.js')}}"></script>

		<!-- Contact Javascript File -->
		<script src="{{asset('public/frontend/style/stylecontact/mail/jqBootstrapValidation.min.js')}}"></script>
		<script src="{{asset('public/frontend/style/stylecontact/mail/contact.js')}}"></script>
  
<script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>


    <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
   {{--  <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
    <script>paypal.Buttons().render('body');</script> --}}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=2339123679735877&autoLogAppEvents=1"></script>


    <script type="text/javascript">

          $(document).ready(function(){
            $('.send_order').click(function(){
                swal({
                  title: "Xác nhận đơn hàng",
                  text: "Đơn hàng sẽ không được hoàn trả khi đặt,bạn có muốn đặt không?",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Cảm ơn, Mua hàng",

                    cancelButtonText: "Đóng,chưa mua",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                     if (isConfirm) {
                        var shipping_email = $('.shipping_email').val();
                        var shipping_name = $('.shipping_name').val();
                        var shipping_address = $('.shipping_address').val();
                        var shipping_phone = $('.shipping_phone').val();
                        var shipping_notes = $('.shipping_notes').val();
                        var shipping_method = $('.payment_select').val();
                        var order_fee = $('.order_fee').val();
                        var order_coupon = $('.order_coupon').val();
                        var _token = $('input[name="_token"]').val();

                        $.ajax({
                            url: '{{url('/confirm-order')}}',
                            method: 'POST',
                            data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_notes:shipping_notes,_token:_token,order_fee:order_fee,order_coupon:order_coupon,shipping_method:shipping_method},
                            success:function(){
                               swal("Đơn hàng", "Đơn hàng của bạn đã được gửi thành công", "success");
                            }
                        });

                        window.setTimeout(function(){ 
                            location.reload();
                        } ,3000);

                      } else {
                        swal("Đóng", "Đơn hàng chưa được gửi, làm ơn hoàn tất đơn hàng", "error");

                      }
              
                });

               
            });
        });
    

    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.add-to-cart').click(function(){

                var id = $(this).data('id_product');
                // alert(id);
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_quantity = $('.cart_product_quantity_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                if(parseInt(cart_product_qty)>parseInt(cart_product_quantity)){
                    alert('Làm ơn đặt nhỏ hơn ' + cart_product_quantity);
                }else{

                    $.ajax({
                        url: '{{url('/add-cart-ajax')}}',
                        method: 'POST',
                        data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token,cart_product_quantity:cart_product_quantity},
                        success:function(){

                            swal({
                                    title: "Đã thêm sản phẩm vào giỏ hàng",
                                    text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                    showCancelButton: true,
                                    cancelButtonText: "Xem tiếp",
                                    confirmButtonClass: "btn-success",
                                    confirmButtonText: "Đi đến giỏ hàng",
                                    closeOnConfirm: false
                                },
                                function() {
                                    window.location.href = "{{url('/gio-hang')}}";
                                });

                        }

                    });
                }

                
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.choose').on('change',function(){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
           
            if(action=='city'){
                result = 'province';
            }else{
                result = 'wards';
            }
            $.ajax({
                url : '{{url('/select-delivery-home')}}',
                method: 'POST',
                data:{action:action,ma_id:ma_id,_token:_token},
                success:function(data){
                   $('#'+result).html(data);     
                }
            });
        });
        });
          
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.calculate_delivery').click(function(){
                var matp = $('.city').val();
                var maqh = $('.province').val();
                var xaid = $('.wards').val();
                var _token = $('input[name="_token"]').val();
                if(matp == '' && maqh =='' && xaid ==''){
                    alert('Làm ơn chọn để tính phí vận chuyển');
                }else{
                    $.ajax({
                    url : '{{url('/calculate-fee')}}',
                    method: 'POST',
                    data:{matp:matp,maqh:maqh,xaid:xaid,_token:_token},
                    success:function(){
                       location.reload(); 
                    }
                    });
                } 
        });
    });
</script>
  
</body>
</html>