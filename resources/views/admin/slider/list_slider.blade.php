@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
  <div class="text-center panel-heading">
      <h3>Banner</h3>
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
            
            <th>Tên slide</th>
            <th>Hình ảnh</th>
            <!-- <th>Mô tả</th> -->
            <th>Status</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_slide as $key => $slide)
          <tr>
            <td>{{ $slide->slider_name }}</td>
            <td><img src="public/uploads/slider/{{ $slide->slider_image }}" height="120" width="500"></td>
            <!-- <td>{{ $slide->slider_desc }}</td> -->
            <td><span class="text-ellipsis">
              <?php
               if($slide->slider_status==1){
                ?>
                <a href="{{URL::to('/unactive-slide/'.$slide->slider_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                <?php
                 }else{
                ?>  
                 <a style="color: red;" href="{{URL::to('/active-slide/'.$slide->slider_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                <?php
               }
              ?>
            </span></td>
            <td>
             
              <a onclick="return confirm('Bạn có chắc là muốn xóa slide này ko?')" href="{{URL::to('/delete-slide/'.$slide->slider_id)}}" class="active styling-edit" ui-toggle-class="">
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