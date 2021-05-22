<?php
//dd($deparment);
?>
@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Thêm mới nhân viên</h4>
              <form action = "{{route('employeeStore')}}" method="post">
                {{@csrf_field()}}
                <div class="form-group">
                  <label for="hoten">Họ Tên</label>
                  <input type="text" class="form-control" name="hoten" >
                </div>
                <div class="form-group">
                  <label for="ngaysinh">Ngày Sinh</label>
                  <input type="date" class="form-control" name= "ngaysinh" >
                </div>
                <div class="form-group">
                  <label for="diachi">Địa Chỉ</label>
                  <input type="text" class="form-control" name="diachi" >
                </div>
                <div class="form-group">
                  <label for="sdt">SDT</label>
                  <input type="text" class="form-control" name="sdt">
                </div>
                <div class="form-group">
                    <label for="dantoc">Dân Tộc</label>
                    <input type="text" class="form-control" name="dantoc">
                  </div>
                  <div class="form-group">
                    <label for="cmnd">CMND</label>
                    <input type="text" class="form-control" name ="CMND" >
                  </div>
                  <div class="form-group">
                    <label for="gioitinh">Giới Tính</label>
                    <input type="text" class="form-control" name="gioitinh" >
                  </div>
                  <div class="form-group">
                    <label for="trinhdo">Trình Độ</label>
                    <input type="text" class="form-control" name="trinhdo">
                  </div>
                  <div class="form-group">
                    <label for="maphongban">Chọn Phòng Ban</label>
                    <select type = "text" class="form-control" name="maphongban">
                        @foreach ($deparment as $value)
                        <option value="{{$value->id}}">{{$value->tenphongban}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="macapbac">Chọn Chức Vụ</label>
                    <select type = "text" class="form-control" name="macapbac">
                        @foreach ($position as $value)
                        <option value="{{$value->id}}">{{$value->tenchucvu}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="mahopdong">Mã Hợp Đồng</label>
                    <input type="text" class="form-control" name="mahopdong" >
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
