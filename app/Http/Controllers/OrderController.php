<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Feeship;
use App\Shipping;
use App\Order;
use App\OrderDetails;
use App\Customer;
use App\Coupon;
use App\Product;
use PDF;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class OrderController extends Controller
{
	public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
	public function order_code(Request $request ,$order_code){
		$this->AuthLogin();

        DB::table('tbl_order')->where('order_code',$order_code)->delete();
        Session::put('message','Xóa đơn hàng thành công');
        return Redirect::to('manage-order');

	}
	public function update_qty(Request $request){
		$this->AuthLogin();
		$data = $request->all();
		$order_details = OrderDetails::where('product_id',$data['order_product_id'])->where('order_code',$data['order_code'])->first();
		$order_details->product_sales_quantity = $data['order_qty'];
		$order_details->save();
	}
	public function update_order_qty(Request $request){
		$this->AuthLogin();
		//update order
		$data = $request->all();
		$order = Order::find($data['order_id']);
		$order->order_status = $data['order_status'];
		$order->save();
		if($order->order_status==2){
			foreach($data['order_product_id'] as $key => $product_id){
				
				$product = Product::find($product_id);
				$product_quantity = $product->product_quantity;
				$product_sold = $product->product_sold;
				foreach($data['quantity'] as $key2 => $qty){
						if($key==$key2){
								$pro_remain = $product_quantity - $qty;
								$product->product_quantity = $pro_remain;
								$product->product_sold = $product_sold + $qty;
								$product->save();
						}
				}
			}
		}elseif($order->order_status!=2 && $order->order_status!=3){
			foreach($data['order_product_id'] as $key => $product_id){
				
				$product = Product::find($product_id);
				$product_quantity = $product->product_quantity;
				$product_sold = $product->product_sold;
				foreach($data['quantity'] as $key2 => $qty){
						if($key==$key2){
								$pro_remain = $product_quantity + $qty;
								$product->product_quantity = $pro_remain;
								$product->product_sold = $product_sold - $qty;
								$product->save();
						}
				}
			}
		}


	}
	public function print_order($checkout_code){
		$this->AuthLogin();
		$pdf = \App::make('dompdf.wrapper');
		$pdf->loadHTML($this->print_order_convert($checkout_code));
		
		return $pdf->stream();
	}
	public function print_order_convert($checkout_code){
		$this->AuthLogin();
		$order_details = OrderDetails::where('order_code',$checkout_code)->get();
		$order = Order::where('order_code',$checkout_code)->get();
		foreach($order as $key => $ord){
			$customer_id = $ord->customer_id;
			$shipping_id = $ord->shipping_id;
		}
		$customer = Customer::where('customer_id',$customer_id)->first();
		$shipping = Shipping::where('shipping_id',$shipping_id)->first();

		$order_details_product = OrderDetails::with('product')->where('order_code', $checkout_code)->get();

		foreach($order_details_product as $key => $order_d){

			$product_coupon = $order_d->product_coupon;
		}
		if($product_coupon != 'no'){
			$coupon = Coupon::where('coupon_code',$product_coupon)->first();

			$coupon_condition = $coupon->coupon_condition;
			$coupon_number = $coupon->coupon_number;

			if($coupon_condition==1){
				$coupon_echo = $coupon_number.'%';
			}elseif($coupon_condition==2){
				$coupon_echo = number_format($coupon_number,0,',','.').'đ';
			}
		}else{
			$coupon_condition = 2;
			$coupon_number = 0;

			$coupon_echo = '0';
		
		}

		$output = '';

		$output.='
		<style>body{
			font-family: DejaVu Sans;
		}
		.table-bordered, th, td{
			
		}
		</style>
	
		<div class="container">
        <p>--------------------------------------------------------------------------------------------------------------------------</p>
        <div class="full">
            <div class="info-shop">
                <div class="title">
                    <p><b class="name" style="font-size: 25px;">X - GAMING SHOP</b><br>
                        Chuyên bán những phụ kiện máy tính,thiết bị game. <br>
                        Địa chỉ: TỈNH VĨNH LONG, PHƯỜNG 2, TP VĨNH LONG <br>
                        HotLine: 09999999999   <br>
                        Website: xgamingshop.com <br>
						Số: ...........
                    </p>
					<center><p><b class="name" style="font-size: 30px;">HOÁ ĐƠN THANH TOÁN</b></p></center>
                </div>
            </div>
            ';
				
		$output.='
		<div class="info-user">
			<table>
				<tr>
					<td>Tên Khách Hàng</td>
					<td>:&nbsp;&nbsp;'.$shipping->shipping_name.'</td>
				</tr>
				<tr>
					<td>Số Điện Thoại</td>
					<td>:&nbsp;&nbsp;'.$shipping->shipping_phone.'</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>: &nbsp;&nbsp;'.$customer->customer_email.'</td>
				</tr>
				<tr>
					<td>Địa chỉ</td>
					<td>: &nbsp;&nbsp;'.$shipping->shipping_address.'</td>
				</tr>
				<tr>
					<td>Ghi chú</td>
					<td>: &nbsp;&nbsp;'.$shipping->shipping_notes.'</td>
				</tr>

			</table>
		</div><br>';
		$output.='				
			
			<div class="info-sp">
				<table class="table-bordered" style="border:1px solid #000; border-collapse: collapse; width: 100%;">
					<thead style="border:1px solid #000; border-collapse: collapse;">
						<tr style="border:1px solid #000; border-collapse: collapse;">
							<th >SẢN PHẨM</th>
							
							
							<th >SỐ LƯỢNG</th>
							<th >GIÁ SẢN PHẨM</th>
							<th >THÀNH TIỀN</th>
						</tr>
					</thead>
					<tbody>';
			
				$total = 0;

				foreach($order_details_product as $key => $product){

					$subtotal = $product->product_price*$product->product_sales_quantity;
					$total+=$subtotal;

					if($product->product_coupon!='no'){
						$product_coupon = $product->product_coupon;
					}else{
						$product_coupon = 'không mã';
					}		

		$output.='		
					<tr>
						<td style="border:1px solid #000; border-collapse: collapse;">'.$product->product_name.'</td>
						
						
						<td style="border:1px solid #000; border-collapse: collapse;"><center>'.$product->product_sales_quantity.'</center></td>
						<td style="border:1px solid #000; border-collapse: collapse;"><center>'.number_format($product->product_price,0,',','.').'đ'.'</center></td>
						<td style="border:1px solid #000; border-collapse: collapse;"><center>'.number_format($subtotal,0,',','.').'đ'.'</center></td>
						
					</tr>';
				}

				if($coupon_condition==1){
					$total_after_coupon = ($total*$coupon_number)/100;
	                $total_coupon = $total - $total_after_coupon;
				}else{
                  	$total_coupon = $total - $coupon_number;
				}

		$output.= '
				<tr><td colspan="4"></td></tr>
				<tr><td colspan="4">- Mã Giảm Giá: '.$product_coupon.'</td></tr>
				<tr><td colspan="4">- Phí Ship: '.number_format($product->product_feeship,0,',','.').'đ'.'</td></tr>
				<tr><td colspan="4">- Tổng Giảm: '.$coupon_echo.'</td></tr>
				<tr><td colspan="4"><b>- Tổng thanh Toán: '.number_format($total_coupon + $product->product_feeship,0,',','.').'đ'.'</b></td></tr>
				';
		$output.='				
				</tbody>
			</table>
		<div>
			<br><br>
			<table style="width: 100%;">
				
					<tr>
						<th><i style="color: #FFFFFF;">i</i><br><b>Người Mua Hàng</b></th>
						<td><center>.............., Ngày.....tháng.....năm..... <br><b>Người Bán Hàng</b></center></td>
					</tr>
				
				
					<tr style="text-align: center;">
						<td><i>(Ký và ghi họ tên)</i></td>
						<td><i>(Ký và ghi họ tên)</i></td>
					</tr>
				
			</table>
		</div>';

		return $output;

	}
	public function view_order($order_code){
		$this->AuthLogin();
		$order_details = OrderDetails::with('product')->where('order_code',$order_code)->get();
		$order = Order::where('order_code',$order_code)->get();
		foreach($order as $key => $ord){
			$customer_id = $ord->customer_id;
			$shipping_id = $ord->shipping_id;
			$order_status = $ord->order_status;
		}
		$customer = Customer::where('customer_id',$customer_id)->first();
		$shipping = Shipping::where('shipping_id',$shipping_id)->first();

		$order_details_product = OrderDetails::with('product')->where('order_code', $order_code)->get();

		foreach($order_details_product as $key => $order_d){

			$product_coupon = $order_d->product_coupon;
		}
		if($product_coupon != 'no'){
			$coupon = Coupon::where('coupon_code',$product_coupon)->first();
			$coupon_condition = $coupon->coupon_condition;
			$coupon_number = $coupon->coupon_number;
		}else{
			$coupon_condition = 2;
			$coupon_number = 0;
		}
		
		return view('admin.view_order')->with(compact('order_details','customer','shipping','order_details','coupon_condition','coupon_number','order','order_status'));

	}
    public function manage_order(){
		$this->AuthLogin();
    	$order = Order::orderby('created_at','DESC')->get(); 
    	return view('admin.manage_order')->with(compact('order'));
    }
}
