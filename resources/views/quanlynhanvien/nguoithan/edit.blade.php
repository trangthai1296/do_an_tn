@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Sửa thông tin người thân nhân viên</h4>
              <form action = "{{route('relativeUpdate',['id'=>$relative->id])}}" method="post">
                {{@csrf_field()}}
                <div class="form-group">
                  <label for="moiquanhe">Mối quan hệ</label>
                  <input type="text" class="form-control" name= "moiquanhe" value="{{$relative->moiquanhe}}"  >
                </div>
                <div class="form-group">
                    <label for="hoten">Họ tên</label>
                    <input type="text" class="form-control" name= "hoten" value="{{$relative->hoten}}"  >
                  </div>
                <div class="form-group">
                    <label for="diachi">Địa Chỉ</label>
                    <input type="text" class="form-control" name="diachi" value="{{$relative->diachi}}" >
                  </div>
                <div class="form-group">
                    <label for="sdt">SDT</label>
                    <input type="text" class="form-control" name="SDT" value="{{$relative->SDT}}" >
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
