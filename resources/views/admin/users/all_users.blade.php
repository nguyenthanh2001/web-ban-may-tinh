@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="text-center panel-heading">
      <h3>Liệt kê users</h3>
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <!-- <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select> -->
        <!-- <button class="btn btn-sm btn-default">Apply</button>                 -->
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <!-- <input type="text" class="input-sm form-control" placeholder="Search"> -->
          <span class="input-group-btn">
            <!-- <button class="btn btn-sm btn-default" type="button">Go!</button> -->
          </span>
        </div>
      </div>
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
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <!-- <input type="checkbox"><i></i> -->
              </label>
            </th>
          
            <th>Tên admin</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
            <!-- <th>Author</th>
            <th>Admin</th>
            <th>User</th> -->
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($admin as $key => $user)
            <form action="{{url('/assign-roles')}}" method="POST">
              @csrf
              <tr>
               
                <!-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> -->
                <td></td>
                <td>{{ $user->admin_name }}</td>
                <td>{{ $user->admin_email }} <input type="hidden" name="admin_email" value="{{ $user->admin_email }}"></td>
                <td>{{ $user->admin_phone }}</td>
                <td>{{ $user->admin_password }}</td>
                <!-- <td><input type="checkbox" name="admin_role" {{$user->hasRole('Xoa') ? 'checked' : ''}}></td> -->
                <!-- <td><input type="checkbox" name="admin_role"  {{$user->hasRole('admin') ? 'checked' : ''}}></td> -->
                <!-- <td><input type="checkbox" name="user_role"  {{$user->hasRole('user') ? 'checked' : ''}}></td>  -->
                <!-- <a onclick="return confirm('Bạn có chắc là muốn xóa slide này ko?')" href="{{URL::to('/delete-users/'.$user->admin_email)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i> -->
              </a>             
              <td>
                <a onclick="return confirm('Bạn có chắc là muốn xóa user này ko?')" href="{{URL::to('/delete-user/'.$user->admin_id )}}" class="active styling-edit" ui-toggle-class="">
                  <i class="fa fa-times text-danger text"></i>
                </a>
                 <!-- <input type="submit" value="Xóa" class="btn btn-sm btn-default"> -->
                 <!-- <input type="submit" value="Xóa" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1"> -->
                 <!-- <form  action="{{URL::to('delete-users')}}" method="post">
                                    {{ csrf_field() }}
                      <button type="submit" name="add_category_product" class="btn btn-info">Xóa</button>
                 </a>
                  </form> -->
                 
              </td> 

              </tr>
            </form>
            <!-- <a onclick="return confirm('Bạn có chắc là muốn xóa slide này ko?')" href="{{URL::to('/delete-users/'.$user->admin_email)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a> -->
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        
      </div>
    </footer>
  </div>
</div>
@endsection