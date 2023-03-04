@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="text-center panel-heading">
      <h3>Liệt kê đơn hàng</h3>
    </div>

    <div class="table-responsive">
    <span>
                    <i style="color: red;">
                    <?php
                    $message = Session::get('message');
                    if($message){
                      echo '<span class="text-alert">'.$message.'</span>';
                      Session::put('message',null);
                    }
                  ?>
                    </i>
                  </span>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>

            <th>Mã Thanh Toán</th>
            <th>Tên Ngân Hàng</th>
            <th>Hình Thức</th>
            <th>Thông Tin</th>
            <th>Thời Gian Thanh Toán</th>
            <th>Tổng Tiền</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          
          @foreach($all_order_atm as $key => $order)
          
          <tr>
            
            <td style="width:30px;">{{ $order->mathanhtoan }}</td>
            <td>{{ $order->nganhang }}</td>
            <td>{{ $order->hinhthuc }}</td>
            <td>{{ $order->info }}</td>
            <td>{{ $order->ngaythanhtoan }}</td>
            <td>{{number_format(($order->tongtien)/100)}} VNĐ</td>
            <td>
              <!-- <a href="{{URL::to('/view-order/'.$order->mathanhtoan)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a> -->
              <a onclick="return confirm('Bạn có chắc là muốn xóa đơn hàng không?')" href="{{URL::to('/delete-order-atm/'.$order->mathanhtoan)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          
         
          @endforeach
        </tbody>
      </table>
      
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        
      
      </div>
    </footer>
  </div>
</div>
@endsection