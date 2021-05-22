@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Sửa thông tin nhân viên</h4>
              <form action = "{{route('employeeUpdate',['id'=>$employee->id])}}" method="post">
                {{@csrf_field()}}
                <div class="form-group">
                  <label for="hoten">Họ Tên</label>
                  <input type="text" class="form-control" name="hoten" value="{{$employee->hoten}}">
                </div>
                <div class="form-group">
                  <label for="ngaysinh">Ngày Sinh</label>
                  <input type="date" class="form-control" name= "ngaysinh" value="{{$employee->ngaysinh}}">
                </div>
                <div class="form-group">
                  <label for="diachi">Địa Chỉ</label>
                  <input type="text" class="form-control" name="diachi" value="{{$employee->diachi}}">
                </div>
                <div class="form-group">
                  <label for="sdt">SDT</label>
                  <input type="text" class="form-control" name="sdt" value="{{$employee->sdt}}">
                </div>
                <div class="form-group">
                    <label for="dantoc">Dân Tộc</label>
                    <input type="text" class="form-control" name="dantoc" value="{{$employee->dantoc}}">
                  </div>
                  <div class="form-group">
                    <label for="cmnd">CMND</label>
                    <input type="text" class="form-control" name ="CMND" value="{{$employee->CMND}}">
                  </div>
                  <div class="form-group">
                    <label for="gioitinh">Giới Tính</label>
                    <input type="text" class="form-control" name="gioitinh" value="{{$employee->gioitinh}}">
                  </div>
                  <div class="form-group">
                    <label for="trinhdo">Trình Độ</label>
                    <input type="text" class="form-control" name="trinhdo" value="{{$employee->trinhdo}}">
                  </div>
                  <div class="form-group">
                    <label for="maphongban">Mã Phòng Ban</label>
                    <input type="text" class="form-control" name= "maphongban" value="{{$employee->maphongban}}">
                  </div>
                  <div class="form-group">
                    <label for="machucvu">Mã Chức Vụ</label>
                    <input type="text" class="form-control" name= "macapbac" value="{{$employee->macapbac}}">
                  </div>
                  <div class="form-group">
                    <label for="mahopdong">Mã Hợp Đồng</label>
                    <input type="text" class="form-control" name="mahopdong" value="{{$employee->mahopdong}}">
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
