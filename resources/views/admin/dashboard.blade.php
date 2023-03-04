@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
        <div class="container-fliud">
            <style type="text/css">
                
            </style>

            <div class="row">
                <p>Thống Kê Doanh Số: </p>

                <form action="" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="col-md-10">
                        <p>Từ Ngày: <input id="datepicker" class="form-control"></p>
                        <input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm" value="Lọc kết quả">
                    </div>
                    <div class="col-md-10">
                        <p>Đến Ngày: <input id="datepicker2" class="form-control"></p>
                    </div>
                </form>

                <div class="col-md-12">
                    <div id="myfirstchart" style="height: 250px;"></div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection