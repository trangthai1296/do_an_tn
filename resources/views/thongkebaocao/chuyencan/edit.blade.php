@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Chỉnh sửa</h4>
              <form action = "{{route('diligenceUpdate',['id'=>$diligence->id])}}" method="post">
                {{@csrf_field()}}
                <div class="form-group">
                    <label for="lydo">Nghỉ có phép</label>
                    <input type="number" class="form-control" name= "nghicophep" value="{{$diligence->nghicophep}}"  >
                  </div>
                  <div class="form-group">
                    <label for="lydo">Nghỉ không phép</label>
                    <input type="number" class="form-control" name= "nghikhongphep" value="{{$diligence->nghikhongphep}}"  >
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
