@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="text-center panel-heading">
      <h3>Danh Sách Mã Giảm Giá</h3>
    </div>
   <br>
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
           

            <th>Tên mã giảm giá</th>
            <th>Mã giảm giá</th>
            <th>Số lượng giảm giá</th>
            <th>Điều kiện giảm giá</th>
            <th>Số giảm</th>
          
            
           
          </tr>
        </thead>
        <tbody>
          @foreach($coupon as $key => $cou)
          <tr>
          
            <td>{{ $cou->coupon_name }}</td>
            <td>{{ $cou->coupon_code }}</td>
            <td>{{ $cou->coupon_time }}</td>
            <td><span class="text-ellipsis">
              <?php
               if($cou->coupon_condition==1){
                ?>
                Giảm theo %
                <?php
                 }else{
                ?>  
                Giảm theo tiền
                <?php
               }
              ?>
            </span>
          </td>
             <td><span class="text-ellipsis">
              <?php
               if($cou->coupon_condition==1){
                ?>
                Giảm {{$cou->coupon_number}} %
                <?php
                 }else{
                ?>  
                Giảm {{number_format($cou->coupon_number)}} k
                <?php
               }
              ?>
            </span></td>
           
            <td>
             
              <a onclick="return confirm('Bạn có chắc là muốn xóa mã này ko?')" href="{{URL::to('/delete-coupon/'.$cou->coupon_id)}}" class="active styling-edit" ui-toggle-class="">
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