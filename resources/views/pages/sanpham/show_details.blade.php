@extends('layout')
@section('content')
@foreach($product_details as $key => $value)
<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL::to('/public/uploads/product/'.$value->product_image)}}" alt="" />
								<!-- <h3>ZOOM</h3> -->
							</div>
							
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    

								  <!-- Controls -->
								  
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h1><b>{{$value->product_name}}</b></h1>
								
								<img src="images/product-details/rating.png" alt="" />
								
								<form action="{{URL::to('/save-cart')}}" method="POST">
									@csrf
									<input type="hidden" value="{{$value->product_id}}" class="cart_product_id_{{$value->product_id}}">

                                            <input type="hidden" value="{{$value->product_name}}" class="cart_product_name_{{$value->product_id}}">

                                            <input type="hidden" value="{{$value->product_image}}" class="cart_product_image_{{$value->product_id}}">

                                            <input type="hidden" value="{{$value->product_quantity}}" class="cart_product_quantity_{{$value->product_id}}">

                                            <input type="hidden" value="{{$value->product_price}}" class="cart_product_price_{{$value->product_id}}">
                                          
								<span>
									<span>{{number_format($value->product_price,0,',','.').'VNĐ'}}</span>
									<br>
									<label>Số lượng:</label>
									<input name="qty" type="number" min="1" class="cart_product_qty_{{$value->product_id}}"  value="1" />
									<input name="productid_hidden" type="hidden"  value="{{$value->product_id}}" />
								</span>
								<input type="button" value="Thêm giỏ hàng" class="btn btn-primary add-to-cart" data-id_product="{{$value->product_id}}" name="add-to-cart">
								</form>

								<p><b>Tình trạng:</b> Còn hàng</p>
								<p><b>Điều kiện:</b> Mơi 100%</p>
								<p><b>Số lượng kho còn:</b> {{$value->product_quantity}}</p>
								<p><b>Thương hiệu:</b> {{$value->brand_name}}</p>
								<p><b>Danh mục:</b> {{$value->category_name}}</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
</div><!--/product-details-->

					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active" ><a href="#details" data-toggle="tab">Mô tả</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Chi tiết sản phẩm</a></li>
							
								<li><a href="#active" data-toggle="tab">Đánh giá</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<p>{!!$value->product_desc!!}</p>
								
							</div>
							
							<div class="tab-pane fade" id="companyprofile" >
								<p>{!!$value->product_content!!}</p>
								
						
							</div>
							
							<div class="tab-pane fade active in" id="reviews" >
							<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0&appId=792678811380564&autoLogAppEvents=1" nonce="kzJtRRN0"></script>
								<!-- <div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div> -->
								<!-- <div class="fb-comments" data-href="http://banhang.com/" data-width="" data-numposts="10"  data-order-by="reverse_time"></div> -->
								<div class="fb-comments" data-href="http://banhang.com/" data-width="" data-numposts="10" data-order-by="reverse_time "></div>
							</div>
							
						</div>
					</div><!--/category-tab-->
	@endforeach
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Sản phẩm liên quan</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
							@foreach($relate as $key => $lienquan)
							<div class="col-sm-4">
                            <div class="product-image-wrapper">
                           
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <form>
                                                @csrf
                                            <input type="hidden" value="{{$lienquan->product_id}}" class="cart_product_id_{{$lienquan->product_id}}">
                                            <input type="hidden" value="{{$lienquan->product_name}}" class="cart_product_name_{{$lienquan->product_id}}">
                                          
                                            <input type="hidden" value="{{$lienquan->product_quantity}}" class="cart_product_quantity_{{$lienquan->product_id}}">
                                            
                                            <input type="hidden" value="{{$lienquan->product_image}}" class="cart_product_image_{{$lienquan->product_id}}">
                                            <input type="hidden" value="{{$lienquan->product_price}}" class="cart_product_price_{{$lienquan->product_id}}">
                                            <input type="hidden" value="1" class="cart_product_qty_{{$lienquan->product_id}}">

                                            <a href="{{URL::to('/chi-tiet/'.$lienquan->product_slug)}}">
                                                <img src="{{URL::to('public/uploads/product/'.$lienquan->product_image)}}" alt="" />
                                                <h2>{{number_format($lienquan->product_price,0,',','.').' '.'VNĐ'}}</h2>
                                                <p>{{$lienquan->product_name}}</p>

                                             
                                             </a>
                                            <input type="button" value="Thêm giỏ hàng" class="btn btn-default add-to-cart" data-id_product="{{$lienquan->product_id}}" name="add-to-cart">
                                            </form>

                                        </div>
                                      
                                </div>
                           
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
							@endforeach		

								
								</div>
									
							</div>
									
						</div>
					</div><!--/recommended_items-->
					<!-- {{--   <ul class="pagination pagination-sm m-t-none m-b-none">
                       {!!$relate->links()!!}
                      </ul> --}} -->

@endsection