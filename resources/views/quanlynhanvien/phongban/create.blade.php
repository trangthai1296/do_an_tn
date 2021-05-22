@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Thêm phòng ban</h4>
              <form action = "{{route('departmentStore')}}" method="post">
                {{@csrf_field()}}
                <div class="form-group">
                  <label for="tenphongban">Tên phòng ban</label>
                  <input type="text" class="form-control" name="tenphongban" >
                </div>
                <div class="form-group">
                  <label for="matruongphong">Mã trưởng phòng</label>
                  <input type="text" class="form-control" name= "matruongphong" >
                </div>
                <div class="form-group">
                    <label for="sdt">SDT</label>
                    <input type="text" class="form-control" name="sdt">
                  </div>
                <div class="form-group">
                  <label for="diachi">Địa Chỉ</label>
                  <input type="text" class="form-control" name="diachi" >
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
