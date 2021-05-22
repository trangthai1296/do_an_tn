@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Sửa thông tin hợp đồng</h4>
              <form action = "{{route('contractUpdate',['id'=>$contract->id])}}" method="post">
                {{@csrf_field()}}
                <div class="form-group">
                  <label for="luongcoban">Lương cơ bản</label>
                  <input type="text" class="form-control" name="luongcoban" value="{{$contract->luongcoban}}">
                </div>
                <div class="form-group">
                  <label for="luongtangca">Lương tăng ca</label>
                  <input type="text" class="form-control" name= "luongtangca" value="{{$contract->luongtangca}}">
                </div>
                <div class="form-group">
                  <label for="BHXH">BHXH</label>
                  <input type="text" class="form-control" name="BHXH" value="{{$contract->BHXH}}">
                </div>
                <div class="form-group">
                    <label for="phucap">Phụ cấp</label>
                    <input type="text" class="form-control" name="phucap" value="{{$contract->phucap}}">
                  </div>
                  <div class="form-group">
                    <label for="thaisan">Thai sản</label>
                    <input type="text" class="form-control" name ="thaisan" value="{{$contract->thaisan}}">
                  </div>
                  <div class="form-group">
                    <label for="thoihanhopdong">Thời hạn hợp đồng</label>
                    <input type="number" class="form-control" name="thoihanhopdong" value="{{$contract->thoihanhopdong}}">
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
