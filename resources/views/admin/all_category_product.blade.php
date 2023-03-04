@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
  <div class="text-center panel-heading">
      <h3>Liệt kê danh mục sản phẩm</h3>
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
            
            <th>Tên danh mục</th>
            <!-- <th>Slug</th> -->
            <th>Mô tả</th>
            <th>Status</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_category_product as $key => $cate_pro)
          <tr>
            
            <td>{{ $cate_pro->category_name }}</td>
            <!-- <td>{{ $cate_pro->slug_category_product }}</td> -->
            <td>{{ $cate_pro->category_desc }}</td>
            <td><span class="text-ellipsis">
              <?php
               if($cate_pro->category_status==0){
                ?>
                <a href="{{URL::to('/unactive-category-product/'.$cate_pro->category_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                <?php
                 }else{
                ?>  
                 <a style="color: red;" href="{{URL::to('/active-category-product/'.$cate_pro->category_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                <?php
               }
              ?>
            </span></td>
           
            <td>
              <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')" href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <!-- ---import data--
      <form action="{{url('import-csv')}}" method="POST" enctype="multipart/form-data">
          @csrf
          
        <input type="file" name="file" accept=".xlsx"><br>

       <input type="submit" value="Import file Excel" name="import_csv" class="btn btn-warning">
      </form>

    ---export data--
       <form action="{{url('export-csv')}}" method="POST">
          @csrf
       <input type="submit" value="Export file Excel" name="export_csv" class="btn btn-success">
      </form> -->


    </div>
    <footer class="panel-footer">
      <div class="row">
        
        
      </div>
    </footer>
  </div>
</div>
@endsection