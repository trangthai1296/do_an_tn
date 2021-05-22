@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Chỉnh sửa</h4>
              <form action = "{{route('quitUpdate',['id'=>$quit->id])}}" method="post">
                {{@csrf_field()}}
                <div class="form-group">
                    <label for="lydo">Ly do</label>
                    <input type="text" class="form-control" name= "lydo" value="{{$quit->lydo}}"  >
                  </div>
                  <div class="form-group">
                    <label for="tinhtrang">Tình trạng</label>
                    <input type="text" class="form-control" name= "tinhtrang" value="{{$quit->tinhtrang}}"  >
                  </div>
                  <div class="form-group">
                    <label for="ngaynghi">Ngày nghỉ</label>
                    <input type="date" class="form-control" name= "ngaynghi" value="{{$quit->ngaynghi}}"  >
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
