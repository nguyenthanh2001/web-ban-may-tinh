@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="text-center panel-heading">
      <h3>Liệt kê sản phẩm</h3>
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
      <table style="width: 100%;" class=" table-striped b-t ">
        <thead>
          <tr>
            <th>STT</th>
            <th >Tên sản phẩm</th>
            <th>Số lượng</th>
            <!-- <th>Slug</th> -->
            <th>Giá</th>
            <th>Ảnh</th>
            <th>Danh mục</th>
            <th>Thương hiệu</th>
            
            <th>Hiển thị</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @php 
              $i = 0;
            @endphp
          @foreach($all_product as $key => $pro)
            @php 
              $i++;
            @endphp
              
          <tr >
            <td>{{ $i }}</td>
            <td >{{ $pro->product_name }}</td>
            <td>{{ $pro->product_quantity }}</td>
            <!-- <td>{{ $pro->product_slug }}</td> -->
            <td>{{ number_format($pro->product_price,0,',','.') }}đ</td>
            <td><img src="public/uploads/product/{{ $pro->product_image }}" height="50" width="50"></td>
            <td>{{ $pro->category_name }}</td>
            <td>{{ $pro->brand_name }}</td>

            <td><span class="text-ellipsis">
              <?php
               if($pro->product_status==0){
                ?>
                <a href="{{URL::to('/unactive-product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                <?php
                 }else{
                ?>  
                 <a style="color: red;" href="{{URL::to('/active-product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                <?php
               }
              ?>
            </span></td>
           
            <td>
              <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này ko?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          <!-- <tr><td colspan="8"></td></tr>
          <tr><td colspan="8">&nbsp;</td></tr> -->
          
          @endforeach
        </tbody>
      </table>
    </div>
    <br>
    <footer class="panel-footer">
      <div class="row">
        
        
      </div>
    </footer>
  </div>
</div>
@endsection