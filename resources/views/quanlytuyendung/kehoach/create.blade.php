@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Thêm kế hoạch</h4>
              <form action = "{{route('planeRecruitmentStore')}}" method="post">
                {{@csrf_field()}}
                <div class="form-group">
                  <label for="machucvu">Mã chức vụ</label>
                  <input type="text" class="form-control" name="machucvu" >
                </div>
                <div class="form-group">
                  <label for="soluong">Số lượng</label>
                  <input type="number" class="form-control" name= "soluong">
                </div>
                <div class="form-group">
                    <label for="mota">Mô tả</label>
                    <input type="text" class="form-control" name="mota" >
                  </div>
                  <div class="form-group">
                    <label for="ngaynaphoso">Ngày nạp hồ sơ</label>
                    <input type="date" class="form-control" name= "ngaynaphoso">
                  </div>
                  <div class="form-group">
                    <label for="ngayhethan">Ngày hết hạn nạp</label>
                    <input type="date" class="form-control" name= "ngayhethan">
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
