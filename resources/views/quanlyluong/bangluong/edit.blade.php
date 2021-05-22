@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Sửa bảng lương</h4>
              <form action = "{{route('salaryUpdate',['id'=>$salary->id])}}" method="post">
                {{@csrf_field()}}
                  <div class="form-group">
                    <label for="luonghanhchinh">Lương hành chính</label>
                    <input type="text" class="form-control" name= "luonghanhchinh" value="{{$salary->luonghanhchinh}}"   >
                  </div>
                  <div class="form-group">
                    <label for="luongtangca">Lương tăng ca</label>
                    <input type="text" class="form-control" name= "luongtangca" value="{{$salary->luongtangca}}"   >
                  </div>
                  <div class="form-group">
                    <label for="khautru">Khẩu trừ</label>
                    <input type="text" class="form-control" name= "khautru" value="{{$salary->khautru}}"  >
                  </div>
                  <div class="form-group">
                    <label for="thuclinh">Thực lĩnh</label>
                    <input type="text" class="form-control" name= "thuclinh" value="{{$salary->thuclinh}}"  >
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
