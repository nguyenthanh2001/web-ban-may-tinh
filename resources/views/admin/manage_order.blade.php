@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
  <div class="text-center panel-heading">
      <h3>Liệt kê đơn hàng</h3>
    </div><br>
    
    <div class="row w3-res-tb">
    
      <form method="POST" action="{{URL::to('/order-filter')}}">
      {{ csrf_field() }}
        <div class="custom-control custom-radio custom-control-inline">
          <label><input name="payment_option" value="0" type="radio"> Tất Cả Đơn Hàng</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <label><input name="payment_option" value="1" type="radio"> Đơn Hàng Mới</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <label><input name="payment_option" value="2" type="radio"> Đơn Hàng Đã Xử Lý</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <label><input name="payment_option" value="3" type="radio"> Đơn Hàng Đã Huỷ</label>
        </div>
          <input type="submit" value="Lọc" name="send_order_place" class="btn btn-primary btn-sm">
      </form>

</div><br>
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
           
            <th>Thứ tự</th>
            <th>Mã đơn hàng</th>
            <th>Ngày tháng đặt hàng</th>
            <th>Tình trạng đơn hàng</th>

            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @php 
          $i = 0;
          @endphp
          @foreach($order as $key => $ord)
            @php 
            $i++;
            @endphp
          <tr>
            <td><i>{{$i}}</i></label></td>
            <td>{{ $ord->order_code }}</td>
            <td>{{ $ord->created_at }}</td>
            <td>@if($ord->order_status==1)
                    Đơn hàng mới
                @elseif($ord->order_status==2)
                    Đã xử lý
                @else
                    Đã huỷ đơn hàng
                @endif
            </td>
           
           
            <td>
              <a href="{{URL::to('/view-order/'.$ord->order_code)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-eye text-success text-active"></i></a>

              <a onclick="return confirm('Bạn có chắc là muốn xóa đơn hàng này ko?')" href="{{URL::to('/delete-order/'.$ord->order_code)}}" class="active styling-edit" ui-toggle-class="">
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