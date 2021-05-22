@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Thêm bản chấm công</h4>
              <form action = "{{route('timesheetStore')}}" method="post">
                {{@csrf_field()}}
                <div class="form-group">
                  <label for="manhanvien">Mã nhân viên</label>
                  <input type="text" class="form-control" name= "manhanvien" >
                </div>
                <div class="form-group">
                    <label for="songaycong">Số ngày công</label>
                    <input type="text" class="form-control" name= "songaycong" >
                  </div>
                  <div class="form-group">
                    <label for="sogiotangca">Số giờ tăng ca</label>
                    <input type="text" class="form-control" name= "sogiotangca" >
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
