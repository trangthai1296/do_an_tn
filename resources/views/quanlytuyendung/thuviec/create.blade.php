@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Thêm Mới</h4>
              <form action = "{{route('probationaryStore')}}" method="post">
                {{@csrf_field()}}
                <div class="form-group">
                  <label for="makehoach">Mã kế hoạch</label>
                  <input type="text" class="form-control" name="makehoach" >
                </div>
                <div class="form-group">
                  <label for="hoten">Họ tên</label>
                  <input type="text" class="form-control" name= "hoten">
                </div>
                <div class="form-group">
                    <label for="ngaybatdau">Ngày bắt đầu</label>
                    <input type="date" class="form-control" name="ngaybatdau" >
                  </div>
                  <div class="form-group">
                    <label for="ngayketthuc">Ngày kết thúc</label>
                    <input type="date" class="form-control" name= "ngayketthuc">
                  </div>
                  <div class="form-group">
                    <label for="ketqua">Kết quả</label>
                    <input type="text" class="form-control" name= "ketqua">
                  </div>
                <button type="submit" class="btn btn-primary mr-2" name ="save">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
