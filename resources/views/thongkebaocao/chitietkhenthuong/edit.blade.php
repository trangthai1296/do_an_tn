@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Chỉnh sửa</h4>
              <form action = "{{route('bonusDetailUpdate',['id'=>$bonusDetail->id])}}" method="post">
                {{@csrf_field()}}
                <div class="form-group">
                  <label for="manhanvien">Mã Nhân Viên</label>
                  <input type="text" class="form-control" name= "manhanvien" value="{{$bonusDetail->manhanvien}}"  >
                </div>
                <div class="form-group">
                    <label for="lydo">Lý Do</label>
                    <input type="text" class="form-control" name= "lydo" value="{{$bonusDetail->lydo}}"  >
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
