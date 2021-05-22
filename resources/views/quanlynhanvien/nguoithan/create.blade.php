@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Thêm người thân nhân viên</h4>
              <form action = "{{route('relativeStore')}}" method="post">
                {{@csrf_field()}}
                <div class="form-group">
                    <label for="id">Mã nhân viên</label>
                    <input type="text" class="form-control" name= "id" >
                  </div>
                <div class="form-group">
                  <label for="moiquanhe">Mối quan hệ</label>
                  <input type="text" class="form-control" name= "moiquanhe" >
                </div>
                <div class="form-group">
                    <label for="hoten">Họ tên</label>
                    <input type="text" class="form-control" name= "hoten" >
                  </div>
                <div class="form-group">
                    <label for="diachi">Địa Chỉ</label>
                    <input type="text" class="form-control" name="diachi" >
                  </div>
                <div class="form-group">
                    <label for="sdt">SDT</label>
                    <input type="text" class="form-control" name="SDT">
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
