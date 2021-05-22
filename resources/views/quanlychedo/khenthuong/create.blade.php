@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Thêm khen thưởng</h4>
              <form action = "{{route('bonusStore')}}" method="post">
                {{@csrf_field()}}
                <div class="form-group">
                  <label for="hinhthuckhenthuong">Hình thức khen thưởng</label>
                  <input type="text" class="form-control" name= "hinhthuckhenthuong" >
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
